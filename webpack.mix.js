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


mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/jquery.animatedheadline.css',
    'resources/css/animate.css',
    'resources/css/owl.carousel.css',
    'resources/css/owl.theme.default.css',
    'resources/css/magnific-popup.css',
    'resources/css/normalize.css',
    'resources/css/style.css',
    'resources/css/responsive.css'
], 'public/css/all.css')
  .scripts([
    'resources/js/jquery-3.2.1.min.js',
    'resources/js/bootstrap.min.js',
    'resources/js/jquery.magnific-popup.js',
    'resources/js/owl.carousel.js',
    'resources/js/wow.min.js',
    'resources/js/jquery.animatedheadline.js',
    'resources/js/custom.js',
    'resources/js/jquery.waypoints.js',
    'resources/js/jquery.counterup.min.js',
    'resources/js/particles.js',
    'resources/js/appp.js',
    'resources/js/validator.js',
    'resources/js/contact.js',
    'resources/js/main.js'
], 'public/js/all.js')
  .sass('resources/sass/app.scss', 'public/css/app.css')
  .version();




