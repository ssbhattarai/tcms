<template>
    <div>
        <a href="/">
            <img
                id="nav-logo"
                class="col-10"
                :src="image"
                alt="Logos"
            />
        </a>
    </div>
</template>

<script>
export default {
    data() {
        return {
            image: "/assets/images/mb-logo.png"
        };
    },
    created() {
        this.getLogo();
    },
    methods: {
        getLogo() {
            axios.get("/get-logo").then(response => {
                // console.log(response.data[0]);
                this.image = "/storage/" + response.data[0].name;
            });
        }
    }
};
</script>
