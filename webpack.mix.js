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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/components/locationSelector.js', 'public/js/components')
    .js('resources/js/auth/loginValidator.js', 'public/js/auth')
    .js('resources/js/auth/formularioRegistro.js', 'public/js/auth')
    .js('resources/js/auth/validarInputs.js', 'public/js/auth')
    .js('resources/js/components/authUserMenu.js', 'public/js/components')
    .js('resources/js/components/acordion.js', 'public/js/components')
    .js('resources/js/components/carrucel.js', 'public/js/components')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ]);

    