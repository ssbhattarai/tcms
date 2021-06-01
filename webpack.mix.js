const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js("resources/js/admin.js", "public/js")
 .js("resources/js/frontend/frontend.js", "public/js")
 .vue()
 .sass("resources/sass/app.scss", "public/css")
 .sass("resources/sass/reservation.scss", "public/css")
 .sass("resources/sass/blog-detail.scss", "public/css")
 .sass("resources/sass/cart.scss", "public/css")
 .sass("resources/sass/menu.scss", "public/css")
 .sass("resources/sass/blog.scss", "public/css")
 .sass("resources/sass/infos.scss", "public/css")
 .sass("resources/sass/about.scss", "public/css")
 .sass("resources/sass/index.scss", "public/css")

