const mix = require('laravel-mix');

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

// ESTO AYUDA A PREVENIR EL ERROR DE MEMORIA
mix.webpackConfig({
    stats: {
         children: true,
    },
    watchOptions: {
        ignored: /node_modules/
    }
});