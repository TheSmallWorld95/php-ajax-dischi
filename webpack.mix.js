let mix = require('laravel-mix');

mix.js('src/js/main.js', 'js')
   .sass('src/scss/master.scss', 'css')
   .setPublicPath('dist').options({
       processCssUrls: false
   });
