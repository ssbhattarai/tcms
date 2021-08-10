// require("./bootstrap");

// window.Vue = require("vue").default;

// Vue.component("logo", require("./components/logo.vue").default);
// Vue.component("loading", require("./components/loading.vue").default);
// Vue.component("contacts", require("./backend/settings/contact.vue").default);
// // blog
// Vue.component("blog", require("./backend/blog/blog.vue").default);
// // api management
// Vue.component(
//     "api-management",
//     require("./backend/settings/api-management.vue").default
// );
// // analytics
// Vue.component("analytics", require("./backend/settings/analytics").default);
// Vue.component("infos", require("./backend/info/infos").default);
// // script
// Vue.component("header-script", require("./backend/settings/script").default);
// //  product and category
// Vue.component("category", require("./backend/service/category").default);

// // users
// Vue.component("users", require("./backend/users/users").default);

// //services
// Vue.component('service-component', require('./backend/settings/service/Service').default);

// //faqs
// Vue.component('faqs-component', require('./backend/Faqs').default);

// //portfolio
// Vue.component('portfolio-component', require('./backend/portfolio/Portfolio').default);




// // global components
// import { BootstrapVue } from "bootstrap-vue";
// import FlashMessage from "@smartweb/vue-flash-message";

// Vue.component("pagination", require("laravel-vue-pagination"));
// Vue.use(BootstrapVue);
// Vue.use(FlashMessage);
// Vue.use(require("vue-moment"));




// import { ValidationProvider } from 'vee-validate';



// // Register it globally
// Vue.component('ValidationProvider', ValidationProvider);


// // You need a specific loader for CSS files like https://github.com/webpack/css-loader
// import 'v-toaster/dist/v-toaster.css'
// import Vue from "vue";

// Vue.component('pagination', require('laravel-vue-pagination'));


// const moment = require('moment')
// require('moment/locale/es-us')

// Vue.use(require('vue-moment'), {
//     moment
// })

// import Toaster from 'v-toaster'

// // You need a specific loader for CSS files like https://github.com/webpack/css-loader
// import 'v-toaster/dist/v-toaster.css'

// // optional set default imeout, the default is 10000 (10 seconds).
// Vue.use(Toaster, {timeout: 5000})

// import VueConfirmDialog from 'vue-confirm-dialog'

// Vue.use(VueConfirmDialog)
// var VueScrollTo = require('vue-scrollto');

// Vue.use(VueScrollTo)

// const app = new Vue({
//     el: "#wrapper"
// });


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue').default;

 /**
  * The following block of code may be used to automatically register your
  * Vue components. It will recursively scan this directory for the Vue
  * components and automatically register them with their "basename".
  *
  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
  */

 // const files = require.context('./', true, /\.vue$/i)
 // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//  Vue.component('example-component', require('./components/ExampleComponent.vue').default);

 /**
  * Next, we will create a fresh Vue application instance and attach it to
  * the page. Then, you may begin adding components to this application
  * or customize the JavaScript scaffolding to fit your unique needs.
  */

//   require('../assets/vendor/MediaManager/js/manager')


 const app = new Vue({
     el: '#wrapper',
 });

