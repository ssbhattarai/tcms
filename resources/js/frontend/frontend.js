require("../bootstrap");

window.Vue = require("vue").default;

// Vue.component("logo", require("../components/logo.vue").default);
// Vue.component("loading", require("../components/loading.vue").default);
// Vue.component("login-form", require("./login/login").default);

Vue.component("blog-category", require("./blog/blog-category.vue").default);


const app = new Vue({
    el: "#app"
});
