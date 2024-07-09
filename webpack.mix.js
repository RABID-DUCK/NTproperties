let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/news-single.scss', 'public/css')
    .sass('resources/sass/uslugi.scss', 'public/css')
    .sass('resources/sass/object-single.scss', 'public/css')
