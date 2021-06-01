<template lang="">
<div>
        <vue-confirm-dialog></vue-confirm-dialog>

         <div class="row row-cols-2">
             <div class="col-1">

                 <h3> Faqs </h3>
             </div>
             <div class="col-1">

                 <button type="button" class="btn btn-primary btn-sm" @click="toggleForm">
                     Add <i class="fas fa-plus"></i>
                 </button>
             </div>
             <div class="col-10">

             </div>
         </div>


         <hr>

   <div class="card" v-if="showForm">
        <ValidationObserver v-slot="{ invalid, validate }">
        <form @submit.prevent="validate().then(submitForm)">

       <div class="row">
           <div class="col">
               <div class="p-4 bg-secondary">
                <ValidationProvider rules="required" v-slot="{ errors }" slim name="Questions title">

                   <label for="title" class="form-control-label">Questions</label>
                    <input type="text" class="form-control form-control-alternative" placeholder="Questions Title" v-model="faqs.question" id="title">
                    <span class="help-text text-danger">{{ errors[0] }}</span>
                </ValidationProvider>
                </div>
           </div>

       </div>


       <div class="form-group col-12">
                    <label>Description</label>
                <ValidationProvider rules="required" v-slot="{ errors }" slim name="description">

                    <editor
                        v-model="faqs.description"
                        api-key="2f0oulwav9ww4mq4vxazctyv3tercajuxkhjk7imgc8opznh"
                        :init="{
                            height: 400,
                            plugins: [
                                'advlist autolink lists link image charmap print preview anchor',
                                'searchreplace visualblocks code fullscreen',
                                'insertdatetime media table paste code help wordcount'
                            ],
                            toolbar:
                                'undo redo | formatselect | bold italic backcolor forecolor  | \ alignleft aligncenter alignright alignjustify | \ bullist numlist outdent indent | removeformat | link image | table | fullscreen preview | help'
                        }"
                    />
                     <span class="help-text text-danger">{{ errors[0] }}</span>
                </ValidationProvider>
                </div>
                <label class="custom-toggle m-3">

                    <input type="checkbox" checked v-model="faqs.status" >
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


        <div class="card" v-if="showDetails">
        <div class="card-body">
            <h5 class="card-title">{{ faqs.question }}</h5> <br>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>Questions</th>
                        <td><b>{{ faqs.question}}</b></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td v-html="faqs.description"></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <span class="badge badge-success" v-if="faqs.status">Active</span>
                            <span class="badge badge-danger" v-if="!faqs.status">Disabled</span>
                        </td>
                    </tr>

                    <tr>
                        <th>Created At</th>
                        <td>{{ faqs.created_at | moment("from", "now", true) }}</td>
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



            <p class="font-weight-bold">Total Items : {{ total }}</p>

            <section>
                <b-table
                    id="my-table"
                    :items="items"
                    :fields="fields"
                    responsive
                    thead-class="bg-secondary"
                    striped
                    hover
                >
                    <template #cell(SN)="items">
                        {{ items.index + 1 }}
                    </template>
                     <template #cell(status)="data">
                            <b class="text-primary" v-if="data.item.status">Active</b>
                            <b class="text-danger" v-else>In Active</b>
                        </template>
                        <!-- <template #cell(status)="data">
                        {{ data.item.status }}
                    </template> -->
                    <template #cell(action)="data">
                        <button
                            class="btn btn-primary btn-sm"
                            @click.stop="previewEditItem(data.item)"
                            data-toggle="tooltip" data-placement="top" title=""
                        >
                            <i class="fa fa-edit"></i>
                        </button>
                        <button
                            class="btn btn-danger btn-sm"
                            @click.stop="deleteItem(data.item)"
                        >
                            <i class="fa fa-trash"></i>
                        </button>
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
                        >Total Items : {{ total }}</label
                    >
                </div>
            </section>
        </div>
</div>

</template>
<script>

import { ValidationProvider, ValidationObserver } from 'vee-validate/dist/vee-validate.full';


import Editor from "@tinymce/tinymce-vue"
import moment from 'moment'



export default {
    components: {
        Editor,
        ValidationProvider,
        ValidationObserver
    },
    data() {
        return {
            faqs : {
                editId: '',
                question: '',
                description: '',
                status:false,

            },
            demoImage: [],
            isCreate:false,



            items: [],
            fields: [
                "SN",
                {
                    key: "question",
                    label: "Questions"
                },
                {
                    key: 'status',
                    label: "Status"
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
                this.resetForm();

            } else {
                this.showForm = true;
                this.resetForm();
                this.formState = "create";
            }
        },
        resetForm() {
            this.faqs.question = "";
            this.faqs.description = "";

            this.faqs.status = false;
        },
        linkGen(pageNum) {
        return pageNum === 1 ? '?' : `?page=${pageNum}`
      },
         previewImage(e) {
            this.demoImage = [];
            this.service.image = [];
            var images = this.$refs.files.files;
            for (let i = 0; i < images.length; i++) {
                // console.log(images[i]);
                this.service.image.push(images[i]);
                //image preview
                var reader = new FileReader();
                reader.onload = e => {
                    this.demoImage.push(e.target.result);
                };
                reader.readAsDataURL(e.target.files[i]);
            }
        },
            getData(page = 1) {
            var data = {
                search_by: this.searchBy,
                keywords: this.Keywords,
                sort_by: this.sortBy
            };
            axios
                .post("/admin/get-all-faqs?page=" + page, data)
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


            formData.append("id", this.faqs.editId);
            formData.append("question", this.faqs.question);
            formData.append("description", this.faqs.description);
            formData.append("status", this.faqs.status);

            const config = {
                "content-type": "multipart/form-data"
            };

            if (this.formState == "create") {
                axios.post("/admin/faqs", formData, config).then(response => {
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
                    .post("/admin/faqs/update", formData, config)
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
            window.scrollTo(0, 0);

            this.faqs = item;

            this.formState = "update"



            this.faqs.editId = item.id;
            this.showForm = true;
        },
        deleteItem(item){
        this.$confirm(
            {
            message: `Delete ${item.question} Faqs ?`,
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
                    axios.delete("/admin/faqs/" + item.id).then(response => {
                    if (response.data.status === true) {
                          this.$toaster.success('Faqs Deleted', {timeout: 3000})

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
        window.scrollTo(0, 0);
        if(this.showDetails) {
            this.showDetails = false;
            this.resetForm();

        } else {

            this.showDetails = true;

            this.faqs = item;

            this.showForm = false;
        }
    }


    }
}
</script>
<style lang="">

</style>
