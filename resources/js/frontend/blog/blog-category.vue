<template>
    <section>
        <div class="blog col-12 p-0">
            <div class="b-header-title border-0">
                <p>Most Popular</p>
            </div>

            <div class="blog-list row col-md-12 col-12 m-0 p-0">
                <div
                    v-for="b in blog"
                    :key="b.index"
                    class="blog-item  mb-5 col-md-4 col-sm-6"
                >
                    <div class="blog-content shadow p-0 m-0">
                        <a :href="'/blog/' + b.slug" class="p-0 m-0">
                            <div class="blog-image">
                                <img
                                    class="col-12 p-0 m-0"
                                    :src="'/storage/' + b.image"
                                    alt=""
                                />
                            </div>
                            <div class="blog-title">
                                <h5 class="font-weight-bold">{{ b.title }}</h5>
                                <div class="bc-button" href="">
                                    <label class="text-secondary"
                                        >read article</label
                                    >
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <button
                v-if="showMore"
                class="button col-12 m-auto"
                @click="getData()"
            >
                LOAD MORE
                <i
                    v-if="isLoading"
                    class="fas fa-circle-notch fa-spin text-light"
                ></i>
            </button>
        </div>
    </section>
</template>

<script>
export default {
    name: "list",
    props: ["category"],
    data() {
        return {
            showMore: true,
            isLoading: false,
            last_id: 0,
            blog: []
            //show empty message
        };
    },
    mounted() {},
    created() {
        this.getData();
    },
    methods: {
        getData() {
            this.isLoading = true;
            var data = {
                category: this.category,
                last_id: this.last_id
            };
            axios.post("/get-blog-category/", data).then(response => {
                this.isLoading = false;
                var response = response.data.payload;
                response.forEach(element => {
                    this.blog.push(element);
                });
                if (response.length == 0) {
                    this.showMore = false;
                }
                this.last_id = response[response.length - 1].id;
                // console.log(this.last_id);
            });
        }
    }
};
</script>

<style scoped></style>
