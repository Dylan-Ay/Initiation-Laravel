const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
// Demande de recompiler le fichier scss en css ( au lieu d'utiliser watch sass)
// Demande d'utiliser le fichier app.js dans public.js
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css', [
        //
    ]);
