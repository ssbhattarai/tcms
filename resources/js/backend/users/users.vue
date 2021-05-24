<template>
    <div class="blog col-12 p2">
        <div class="flash">
            <FlashMessage></FlashMessage>
        </div>

        <loading v-if="isLoading"></loading>

        <!-- show message modal -->
        <section>
            <!-- Modal -->
            <div
                class="modal fade"
                id="message-modal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Message
                            </h5>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>{{ tempMessage }}</p>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal"
                            >
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--   lisiting table     -->
        <div class="listing-table p-3 shadow">
            <div class="row justify-content-end p-3">
                <small v-if="sortBy != 'all'" class="text-info">
                    set [ Sort by -> All ] to search
                </small>
            </div>
            <div class="search-bar">
                <div class="row justify-content-between">
                    <div class="form-group col-3">
                        <div class="row">
                            <label class="col-4">Sort By</label>
                            <select
                                class="form-control form-control-sm col-8"
                                v-model="sortBy"
                                @change="getData"
                            >
                                <option value="all">All</option>
                                <option value="normal">Normal Users</option>
                                <option value="admin">admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-9 mr-2 justify-content-end">
                        <div class="form-group">
                            <label>Search By :</label>
                        </div>
                        <div class="form-group col-2">
                            <select
                                class="form-control form-control-sm"
                                v-model="searchBy"
                            >
                                <option
                                    :value="si"
                                    v-for="si in searchItems"
                                    :key="si.index"
                                    >{{ si }}</option
                                >
                            </select>
                        </div>
                        <div class="form-group col-3">
                            <input
                                class="form-control form-control-sm"
                                type="text"
                                v-model="Keywords"
                                placeholder="Search Keywords"
                            />
                        </div>
                        <div class="form-group">
                            <button
                                class="btn btn-sm  btn-secondary"
                                @click="getData"
                            >
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <p class="font-weight-bold">Total : {{ total }}</p>

            <b-table
                id="my-table"
                :items="items"
                :fields="fields"
                responsive="sm"
                thead-class="bg-secondary"
                striped
            >
                <template #cell(SN)="items">
                    {{ items.index + 1 }}
                </template>
                <template #cell(name)="data">
                    {{ data.item.name }}
                </template>
                <template #cell(is_admin)="data">
                    <span v-if="data.item.is_admin == 0">Normal User</span>
                    <span v-if="data.item.is_admin == 1">Admin</span>
                </template>
                <template #cell(message)="data">
                    <button
                        @click="showMessage(data.item.message)"
                        class="btn btn-sm btn-primary"
                    >
                        <i class="fa fa-eye"></i>
                    </button>
                </template>

                <template #cell(action)="data">
                    <button
                        class="btn btn-danger btn-sm"
                        @click.stop="deleteItem(data.item.id)"
                    >
                        <i class="fa fa-trash"></i>
                    </button>

                    <button
                        v-if="data.item.is_seen == 0"
                        class="btn btn-primary btn-sm"
                        @click.stop="updateContact(data.item.id)"
                    >
                        <i class="fa fa-check"></i>
                    </button>
                </template>
            </b-table>

            <h4 class="text-center p-2" v-if="showEmptyMessage">
                Sorry, No Data found,
            </h4>

            <pagination
                :data="pagination"
                @pagination-change-page="getData"
            ></pagination>

            <hr />
            <div class="row justify-content-between col-12">
                <label class="font-weight-bold"
                    >{{ currentPage }} / {{ lastPage }}
                </label>
                <label class="font-weight-bold">Total : {{ total }}</label>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isLoading: false,
            //form
            demoImage: [],
            formState: "save",
            //listing
            items: [],
            searchItems: ["name", "phone", "email"],
            fields: [
                "SN",
                {
                    key: "name",
                    label: "Name"
                },
                "email",
                "phone",

                {
                    key: "is_admin",
                    label: "Role"
                }
                // "Action"
            ],
            tempMessage: "",

            //search
            Keywords: "",
            searchBy: "name",
            sortBy: "all",
            //show empty message
            showEmptyMessage: false,
            //paginatoin
            pagination: {},
            currentPage: 1,
            rows: 0,
            perPage: 10,
            lastPage: 0,
            total: 0
        };
    },
    mounted() {},
    created() {
        this.getData();
    },
    methods: {
        getData(page = 1) {
            var data = {
                search_by: this.searchBy,
                keywords: this.Keywords,
                sort_by: this.sortBy
            };
            axios
                .post("/admin/get-all-users?page=" + page, data)
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

        showMessage(elem) {
            this.tempMessage = elem;
            $("#message-modal").modal("show");
        },

        deleteItem(id) {
            var confirm = window.confirm("Are your Sure want to delete ?");
            if (confirm) {
                axios.delete("/admin/reservations/" + id).then(response => {
                    if (response.data.status == true) {
                        this.flashMessage.success({
                            title: "Success",
                            message: response.data.message
                        });
                        this.getData();
                    } else {
                        this.flashMessage.success({
                            title: "Error",
                            message: response.data.message
                        });
                    }
                });
            }
        }
    }
};
</script>

<style scoped>
table {
    width: 100%;
}
.images {
    width: 80px;
    height: 50px;
    overflow: hidden;
}
.images img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
}

.preview-image {
    height: 100px;
    width: 100px;
    padding: 10px;
}
#img-container {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    margin-bottom: 20px;
}
.preview-image img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    object-position: center center;
}
</style>
