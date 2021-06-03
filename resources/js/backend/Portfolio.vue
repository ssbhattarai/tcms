<template lang="">
<div>
        <vue-confirm-dialog></vue-confirm-dialog>

     <div class="row row-cols-2">
             <div class="col-1">

                 <h3> Portfolio </h3>
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

   <div class="card bg-secondary" v-if="showForm">
        <ValidationObserver v-slot="{ invalid, validate }">
        <form @submit.prevent="validate().then(submitForm)">

       <div class="row">
           <div class="col">
               <div class="p-2">
                <ValidationProvider rules="required" v-slot="{ errors }" slim name="service title">

                   <label for="title" class="form-control-label">Company Name</label>
                    <input type="text" class="form-control form-control-alternative "  placeholder="company name" v-model="portfolio.companyName" id="title">
                    <span class="help-text text-danger">{{ errors[0] }}</span>
                </ValidationProvider>
                </div>
           </div>
           <div class="col">
               <div class="p-2">
                <ValidationProvider rules="required" v-slot="{ errors }" slim name="used technology">

                   <label for="intro" class="form-control-label">Use Technology</label>
                   <textarea rows="" cols="" class="form-control form-control-alternative" v-model="portfolio.usedTechnology" id="intro" placeholder="Laravel, Vue"></textarea>
                    <span class="help-text text-danger">{{ errors[0] }}</span>
                </ValidationProvider>
                </div>
           </div>
       </div>

        <div class="row">
            <div class="col m-2">
                <div class="form-group">
                    <label for="example-url-input" class="form-control-label">URL</label>
                <ValidationProvider rules="required" v-slot="{ errors }" slim name="url">

                    <input class="form-control form-control-alternative" type="url" value="" id="example-url-input" v-model="portfolio.siteUrl" placeholder="https://example.com">
                    <span class="help-text text-danger">{{ errors[0] }}</span>
                </ValidationProvider>
                </div>
            </div>
            <div class="col">
                <div class="p-2 bg-secondary">
                  <div class="form-group">
                        <label for="category">Category</label>
                <ValidationProvider rules="required" v-slot="{ errors }" slim name="category">

                        <select class="form-control form-control-alternative" id="category" v-model="portfolio.categoryId">
                            <option selected value="">--Select category --</option>
                            <option v-for="(cat, index) in categories" :key="index" :value="cat.id">{{cat.title}}</option>
                        </select>
                          <span class="help-text text-danger">{{ errors[0] }}</span>
                </ValidationProvider>
                    </div>
                </div>
            </div>
        </div>
       <div class="form-group col-12">
                    <label class="font-weight-bold ">Image</label>
                    <br />
                <ValidationProvider rules="image" v-slot="{ errors }" slim name="image">

                    <input
                        class="form-control form-control-sm"
                        @change="previewImage"
                        id="image-file"
                        ref="files"
                        type="file"
                        accept="image/png, image/jpg"
                        multiple
                    />
                    <span class="help-text text-danger">{{ errors[0] }}</span>
                </ValidationProvider>
                </div>

                <div id="img-container">
                    <div
                        class="preview-image"
                        v-for="image in demoImage"
                        :key="image.index"
                    >
                        <img class="col-md-2 col-sm-4" :src="image" alt="" />
                    </div>
                </div>

       <div class="form-group col-12">
                    <label>Description</label>
                <ValidationProvider rules="required" v-slot="{ errors }" slim name="service description">

                    <editor
                        v-model="portfolio.description"
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

                    <input type="checkbox" checked v-model="portfolio.status" >
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
            <h5 class="card-title">{{ portfolio.companyName }}</h5> <br>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>Company Name</th>
                        <td><b>{{ portfolio.companyName}}</b></td>
                    </tr>
                    <tr>
                        <th>Used Technology</th>
                        <td><b>{{  portfolio.usedTechnology }}</b></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td v-html="portfolio.description"></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <span class="badge badge-success" v-if="portfolio.status">Active</span>
                            <span class="badge badge-danger" v-if="!portfolio.status">Disabled</span>

                        </td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            <div id="img-container">
                    <div
                        class="preview-image"
                        v-for="image in demoImage"
                        :key="image.index"
                    >
                        <img class="col-md-2 col-sm-4" :src="image" alt="" />
                    </div>
                </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{ portfolio.created_at | moment("from", "now", true) }}</td>
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
                        >Total Agent : {{ total }}</label
                    >
                </div>
            </section>
        </div>
        <PortfolioCategory/>
</div>

</template>
<script>

import { ValidationProvider, ValidationObserver } from 'vee-validate/dist/vee-validate.full';


import Editor from "@tinymce/tinymce-vue"
import moment from 'moment'

import PortfolioCategory from './PortfolioCategory';

export default {
    components: {
        Editor,
        ValidationProvider,
        ValidationObserver,
        PortfolioCategory
    },
    data() {
        return {
            portfolio : {
                editId: '',
                companyName: '',
                usedTechnology: '',
                description: '',
                image: '',
                status:false,
                prevImage: '',
                siteUrl: '',
                categoryId: ''

            },
            demoImage: [],
            isCreate:false,



            items: [],
            fields: [
                "SN",
                {
                    key: "company_name",
                    label: "Company Name"
                },
                {
                    key: 'category.title',
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
            showDetails:false,

            categories: []
        }
    },
    created() {
        this.getData();
        this.getAllCategories()
    },
    methods: {
        getAllCategories() {
            axios.get('/admin/portcategory/all')
                .then(res => {
                    console.log(res.data);
                    this.categories = res.data;
                });
        },
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
            this.portfolio.companyName = "";
            this.demoImage = [];
            this.portfolio.image = [];
            this.portfolio.description = "";
            this.portfolio.categoryId = "";

            this.portfolio.usedTechnology = "";
            this.portfolio.siteUrl = "";

            this.portfolio.status = false;
        },
        linkGen(pageNum) {
        return pageNum === 1 ? '?' : `?page=${pageNum}`
      },
         previewImage(e) {
            this.demoImage = [];
            this.portfolio.image = [];
            var images = this.$refs.files.files;
            for (let i = 0; i < images.length; i++) {
                // console.log(images[i]);
                this.portfolio.image.push(images[i]);
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
                .post("/admin/get-all-portfolios?page=" + page, data)
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

            for (let i = 0; i < this.portfolio.image.length; i++) {
                let file = self.portfolio.image[i];
                formData.append("image[" + i + "]", file);
            }

            formData.append("id", this.portfolio.editId);
            formData.append("company_name", this.portfolio.companyName);
            formData.append("description", this.portfolio.description);
            formData.append("status", this.portfolio.status);
            formData.append("used_technology", this.portfolio.usedTechnology);
            formData.append("prev_image", this.portfolio.prevImage);
            formData.append("category_id", this.portfolio.categoryId);
            formData.append("site_url", this.portfolio.siteUrl);

            const config = {
                "content-type": "multipart/form-data"
            };

            if (this.formState == "create") {
                axios.post("/admin/portfolios", formData, config).then(response => {
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
                    .post("/admin/portfolios/update", formData, config)
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

            this.portfolio = item;
            console.log(item);
            this.portfolio.categoryId = item.category.id;
            this.portfolio.companyName = item.company_name;
            this.portfolio.usedTechnology = item.used_technology;
            this.portfolio.siteUrl = item.site_url

            const prev_image = item.image;
            this.formState = "update"



            this.portfolio.prevImage = item.image;

            this.demoImage.push("/storage/" + prev_image);
            this.portfolio.editId = item.id;
            this.showForm = true;
        },
        deleteItem(item){
        this.$confirm(
            {
            message: `Delete ${item.company_name} Portfolio ?`,
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
                    axios.delete("/admin/portfolios/" + item.id).then(response => {
                    if (response.data.status === true) {
                          this.$toaster.success('Portfolio Deleted', {timeout: 3000})

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
            this.getData();
            this.resetForm();

        } else {

            this.showDetails = true;
            this.portfolio = item;
            this.portfolio.categoryId = item.category.id;
            this.portfolio.companyName = item.company_name;
            this.portfolio.usedTechnology = item.used_technology;
            this.portfolio.siteUrl = item.site_url

            const prev_image = item.image;



            this.portfolio.prevImage = item.image;

            this.demoImage.push("/storage/" + prev_image);
        }
    }


    }
}
</script>
<style lang="">

</style>
