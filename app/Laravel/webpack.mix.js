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

mix.js('resources/js/item.js', 'public/js')
    .js('resources/js/task.js', 'public/js')
    .js('resources/js/todo.js', 'public/js')
    .js('resources/js/modal.js', 'public/js')
    .js('resources/js/wings.js', 'public/js')
    .js('resources/js/jquery.main.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
