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
    .copy(['resources/js/plugins.js',
           'resources/js/jquery.themepunch.tools.min.js',
           ], 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/plugins.css', 'public/css')
    .postCss('resources/css/style.css', 'public/css')
    .postCss('resources/type/icons.css', 'public/css')
    .postCss('resources/css/color/blue.css', 'public/css/color.css');

if (mix.inProduction()) {
    mix.version();
}
