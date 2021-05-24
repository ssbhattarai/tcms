require("./bootstrap");

window.Vue = require("vue").default;

Vue.component("logo", require("./components/logo.vue").default);
Vue.component("loading", require("./components/loading.vue").default);
Vue.component("contacts", require("./backend/settings/contact.vue").default);
// blog
Vue.component("blog", require("./backend/blog/blog.vue").default);
// api management
Vue.component(
    "api-management",
    require("./backend/settings/api-management.vue").default
);
// analytics
Vue.component("analytics", require("./backend/settings/analytics").default);
Vue.component("infos", require("./backend/info/infos").default);
// script
Vue.component("header-script", require("./backend/settings/script").default);
//  product and category
Vue.component("category", require("./backend/service/category").default);

// users
Vue.component("users", require("./backend/users/users").default);

// global components
import { BootstrapVue } from "bootstrap-vue";
import FlashMessage from "@smartweb/vue-flash-message";

Vue.component("pagination", require("laravel-vue-pagination"));
Vue.use(BootstrapVue);
Vue.use(FlashMessage);
Vue.use(require("vue-moment"));


const moment = require('moment')
require('moment/locale/es-us')

Vue.use(require('vue-moment'), {
    moment
})

const app = new Vue({
    el: "#app"
});
