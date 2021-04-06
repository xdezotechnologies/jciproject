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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

    mix.styles([
        'public/css/raw.css'
    ], 'public/css/all.css');


    mix.scripts([
        'public/app-assets/vendors/js/vendors.min.js',
        'public/app-assets/vendors/js/charts/chart.min.js',
        'public/app-assets/vendors/js/charts/raphael-min.js',
        'public/app-assets/vendors/js/charts/morris.min.js',
        'public/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js',
        'public/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js',
        'public/app-assets/data/jvector/visitor-data.js',
        'public/app-assets/js/core/app-menu.js',
        'public/app-assets/js/core/app.js',
        'public/app-assets/js/scripts/customizer.js',
        'public/app-assets/js/scripts/pages/dashboard-sales.js'
    ], 'public/js/all.js');
