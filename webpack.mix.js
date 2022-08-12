
require('laravel-mix')

    .setPublicPath('dist')

    .options({ processCssUrls: false })

    .js('resources/js/app.js', 'dist/js')

    .postCss('resources/css/app.css', 'dist/css', [require('tailwindcss')])

    .version();
