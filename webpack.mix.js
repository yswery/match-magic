const { mix } = require('laravel-mix');

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

mix.js('./resources/assets/js/app.js','public/js')
   .js('./resources/assets/js/gallery.js','public/js/gallery.js')
   .js('./resources/assets/js/config/selectors.js','public/js/selectors.js')
   .js('./resources/assets/js/Utility/format.js', 'public/js/format.js')
   .js('./node_modules/lightgallery.js/dist/js/lightgallery.min.js', 'public/js/lightgallery.min.js')
   .js('./node_modules/lg-fullscreen.js/dist/lg-fullscreen.min.js', 'public/js/lg-fullscreen.min.js')
   .js('./node_modules/lg-zoom.js/dist/lg-zoom.min.js', 'public/js/lg-zoom.min.js')
   .sass('./resources/assets/sass/app.scss', 'public/css')
   .styles('./node_modules/lightgallery.js/dist/css/lightgallery.min.css', 'public/css/lightgallery.min.css')
   .copy('./node_modules/lightgallery.js/dist/fonts/lg.woff', 'public/fonts/lg.woff')
   .copy('./node_modules/lightgallery.js/dist/fonts/lg.ttf', 'public/fonts/lg.ttf')
   .copy('./node_modules/lightgallery.js/dist/img/loading.gif', 'public/img/loading.gif')
   .options({
       processCssUrls: false
   });