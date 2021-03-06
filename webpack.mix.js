let mix = require('laravel-mix');

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

mix.browserSync('tenancy.dev');

mix.js('resources/assets/js/app.js', 'public/js');

mix
  .sass('node_modules/mdi/scss/materialdesignicons.scss', 'public/css')
  .stylus('resources/assets/styl/app.styl', 'public/css');
