// webpack.mix.js

let mix = require('laravel-mix');

mix.sass('resources/css/styles.scss', '').setPublicPath('css');

mix.browserSync({

    proxy: "http://fabnovac.test",
    files: ['**/*.php', '*.php', 'resources/css/*.scss', 'css/*.css'],

});