let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/news-single.scss', 'public/css')
    .sass('resources/sass/uslugi.scss', 'public/css')
    .sass('resources/sass/objects.scss', 'public/css')
    .sass('resources/sass/object-single.scss', 'public/css')
    .sass('resources/sass/contacts.scss', 'public/css')
    .sass('resources/sass/partners.scss', 'public/css')
    .sass('resources/sass/analitick.scss', 'public/css')
    .sass('resources/sass/company.scss', 'public/css')
    .sass('resources/sass/guide.scss', 'public/css')
    .sass('resources/sass/navigation.scss', 'public/css')
    .sass('resources/sass/news.scss', 'public/css')
    .sass('resources/sass/reviews.scss', 'public/css')
    .sass('resources/sass/guide-single.scss', 'public/css')

