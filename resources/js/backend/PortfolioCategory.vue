<template lang="">
<div class="mt-8" id="container">
        <!-- <vue-confirm-dialog></vue-confirm-dialog> -->

     <div class="row row-cols-2">
             <div class="col-4">

                 <h3> Portfolio Category </h3>
             </div>
             <div class="col-1" >

                 <button type="button" class="btn btn-primary btn-sm" @click="toggleForm">
                     Add <i class="fas fa-plus"></i>
                 </button>
             </div>
             <div class="col-7">

             </div>
    </div>

         <hr id="edit">

   <div class="card bg-secondary" v-if="showForm">
        <ValidationObserver v-slot="{ invalid, validate }">
        <form @submit.prevent="validate().then(submitForm)">

       <div class="row">
           <div class="col">
               <div class="p-2">
                <ValidationProvider rules="required" v-slot="{ errors }" slim name="category">

                   <label for="title" class="form-control-label">Category Name</label>
                    <input type="text" class="form-control form-control-alternative "  placeholder="Web Development" v-model="category.title" id="title">
                    <span class="help-text text-danger">{{ errors[0] }}</span>
                </ValidationProvider>
                </div>
           </div>

       </div>
                <label class="custom-toggle m-3">

                    <input type="checkbox" checked v-model="category.status" >
                <span class="custom-toggle-slider rounded-circle" data-label-off="false" data-label-on="true"></span>
            </label>

        <div class="float-right p-4">
                <button type="submit" class="btn btn-primary btn-sm" :disabled="invalid">Save</button>
                <button type="button" class="btn btn-default btn-sm" @click="toggleForm">Cancel</button>
        </div>

                </form>
                </ValidationObserver>
   </div>

    <!-- show details -->

        <div id="show"></div>
        <div class="card" v-if="showDetails">
        <div class="card-body">
            <h5 class="card-title">{{ category.title }}</h5> <br>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>Category</th>
                        <td><b>{{ category.title}}</b></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <span class="badge badge-success" v-if="category.status">Active</span>
                            <span class="badge badge-danger" v-if="!category.status">Disabled</span>

                        </td>
                    </tr>

                    <tr>
                        <th>Created At</th>
                        <td>{{ category.created_at | moment("from", "now", true) }}</td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-secondary btn-sm float-right m-4" @click="showData"> Hide</button>
        </div>
        </div>

      <!--   lisiting table     -->
        <div class="listing-table p-3 shadow">
            <section>
                <div class="search-bar">
                    <div class="row justify-content-between">
                        <div class="form-group col-3">

                        </div>
                        <div class="row col-9 mr-2 justify-content-end">
                            <div class="form-group col-3">
                                <input
                                    class="form-control form-control-alternative"
                                    type="text"
                                    v-model="Keywords"
                                    placeholder="Search Keywords"
                                />
                            </div>
                            <div class="form-group">
                                <button
                                    class="btn  btn-secondary"
                                    @keyup.enter="getData"
                                    @click="getData"
                                >
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <p class="font-weight-bold">Total Agent : {{ total }}</p>

            <section>
                <b-table
                    id="my-table"
                    :items="items"
                    :fields="fields"
                    responsive="sm"
                    thead-class="bg-secondary"
                    striped
                    hover
                >
                    <template #cell(SN)="items">
                        {{ items.index + 1 }}
                    </template>
                    <template #cell(image)="data">
                        <div class="images">
                            <img :src="'/storage/' + data.item.image" alt="" />
                        </div>
                    </template>
                    <template #cell(action)="data">
                        <button
                            class="btn btn-primary btn-sm"
                            @click.stop="previewEditItem(data.item)"
                            data-toggle="tooltip" data-placement="top" title=""
                        >
                            <i class="fa fa-edit"></i>
                        </button>
                        <!-- <button
                            class="btn btn-danger btn-sm"
                            @click.stop="deleteItem(data.item)"
                        >
                            <i class="fa fa-trash"></i>
                        </button> -->
                        <button
                            class="btn btn-info btn-sm"
                            @click.stop="showData(data.item)"
                        >
                            <i class="fa fa-eye"></i>
                        </button>

                    </template>
                </b-table>


                <h4 class="text-center p-2" v-if="showEmptyMessage">
                    Sorry, No Data found,
                </h4>
            </section>


            <pagination
                :data="pagination"
                @pagination-change-page="getData"
            >

            </pagination>

            <hr />

            <section>
                <div class="row justify-content-between col-12">
                    <label class="font-weight-bold"
                        >{{ currentPage }} / {{ lastPage }}
                    </label>
                    <label class="font-weight-bold"
                        >Total Agent : {{ total }}</label
                    >
                </div>
            </section>
        </div>
</div>

</template>
<script>

import { ValidationProvider, ValidationObserver } from 'vee-validate/dist/vee-validate.full';


import moment from 'moment';




export default {
    components: {
        ValidationProvider,
        ValidationObserver
    },
    data() {
        return {
            category : {
                editId: '',
                title: '',
                status: '',

            },
            isCreate:false,



            items: [],
            fields: [
                "SN",
                {
                    key: "title",
                    label: "Category"
                },
                {
                    key: "created_at",
                    label: "Created At",
                    formatter: value => {
                        return moment(value).format('YYYY MMM DD')
                    }
                },

                "Action"
            ],

            //search
            Keywords: "",
            searchBy: "title",
            sortBy: "",
            //show empty message
            showEmptyMessage: false,
            //show and hide form
            showForm: false,
            //paginatoin
            pagination: {},
            currentPage: 1,
            rows: 0,
            perPage: 2,
            lastPage: 0,
            total: 0,



            isLoading: false,

            showDetails:false
        }
    },
    created() {
        this.getData();
    },
    methods: {

         toggleForm() {
            if (this.showForm === true) {
                this.showForm = false;
                this.getData();
                this.resetForm();

            } else {
                this.showForm = true;
                this.resetForm();
                this.formState = "create";
            }
        },
        resetForm() {
            this.category.title = "";
            this.category.status = false;
        },

            getData(page = 1) {
            var data = {
                search_by: this.searchBy,
                keywords: this.Keywords,
                sort_by: this.sortBy
            };
            axios
                .post("/admin/get-all-portcategory?page=" + page, data)
                .then(response => {
                    var response = response.data.payload;
                    // console.log(response);
                    this.items = response.data;
                    response.data.length == 0
                        ? (this.showEmptyMessage = true)
                        : (this.showEmptyMessage = false);
                    //pagination
                    this.pagination = response;
                    this.rows = response.total;
                    this.currentPage = response.current_page;
                    this.lastPage = response.last_page;
                    this.total = response.total;
                });
        },
        submitForm() {
            const formData = new FormData();
            var self = this;

            formData.append("id", this.category.editId);
            formData.append("title", this.category.title);
            formData.append("status", this.category.status);

            const config = {
                "content-type": "multipart/form-data"
            };

            if (this.formState == "create") {
                axios.post("/admin/portcategories", formData, config).then(response => {
                    var response = response.data;
                    // console.log(response);

                    if (response.status === true) {
                       this.$toaster.success(response.message, {timeout: 3000})

                        //hide form
                        this.getData();
                        this.showForm = false;
                        this.resetForm();
                    } else {
                        this.flashMessage.warning({
                            title: "Failed",
                            message: response.message
                        });
                    }
                });
            } else {
                const config = {
                "content-type": "multipart/form-data",

            };
                axios
                    .post("/admin/portcategory/update", formData, config)
                    .then(response => {
                        var response = response.data;
                        if (response.status == true) {
                             this.$toaster.success(response.message, {timeout: 3000})

                            //hide form
                            this.getData();
                            this.showForm = false;
                            this.resetForm();
                        } else {
                             this.$toaster.error(response.message, {timeout: 3000})

                        }
                    });
            }
        },

        previewEditItem(item) {
            // window.scrollTo(0, 0);

            this.category = item;
            this.category.status = item.status;
            var options = {
                container: 'body',
                easing: 'linear',
                lazy: true,
                offset: -60,
                force: true,
                cancelable: true,
                onStart: function(element) {
                    // scrolling started
                    // alert('started')
                },
                onDone: function(element) {
                    // scrolling is done
                    // alert('done')

                },
                onCancel: function() {
                    // scrolling has been interrupted
                },
                x: false,
                y: true
            }
            this.$scrollTo('#edit','200',options);

            this.formState = "update"


            this.category.editId = item.id;
            this.showForm = true;

        },
        deleteItem(item){

        this.$confirm(
            {
            message: `Delete ${item.title} service ?`,
            button: {
                no: 'No',
                yes: 'Yes'
            },
            /**
             * Callback Function
             * @param {Boolean} confirm
             */
            callback: confirm => {
                if (confirm) {
                // ... do something
                    // console.log(item);
                    axios.delete("/admin/services/" + item.id).then(response => {
                    if (response.data.status === true) {
                          this.$toaster.success('Service Deleted', {timeout: 3000})

                        this.getData();
                    } else {
                        this.$toaster.error(response.message, {timeout: 3000})
                    }
                });
                }
            }
            }
        )
    },

    showData(item) {
        // window.scrollTo(0, 0);
         var options = {
                container: 'body',
                easing: 'linear',
                lazy: true,
                offset: -60,
                force: true,
                cancelable: true,
                onStart: function(element) {
                    // scrolling started
                    // alert('started')
                },
                onDone: function(element) {
                    // scrolling is done
                    // alert('done')

                },
                onCancel: function() {
                    // scrolling has been interrupted
                },
                x: false,
                y: true
            }
            this.$scrollTo('#show','200',options);
        if(this.showDetails) {
            this.showDetails = false;
            this.getData();
            this.resetForm();

        } else {

            this.showDetails = true;

            this.category = item;

            this.showForm = false;
        }
    }


    }
}
</script>
<style lang="">

</style>
