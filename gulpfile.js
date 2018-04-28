const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
       
       mix.styles ([

       		'blog-post.css',
       		'bootstrap.css',
       		'bootstrap.min.css',
       		'font-awesome.css',
       		'metisMenu.css',
       		'sb-admin-2.css',
       		'styles.css',
       		'timeline.css'


       	], './public/css/libs.css');


       mix.scripts([
       		'jquery.js',
       		'bootstrap.js',
       		'bootstrap.min.js',
       		'metisMenu.js',
       		'sb-admin-2.js'

       	], './public/js/libs.js');


});

/*
.styles ([

       		'libs/blog-post.css',
       		'libs/bootstrap.css',
       		'libs/bootstrap.min.css',
       		'libs/font-awesome.css',
       		'libs/metisMenu.css',
       		'libs/sb-admin-2.css',
       		'libs/style.css',
       		'libs/timeline.css'


       	], './public/css/lib.css')


       .scripts([
       	
       		'libs/bootstrap.js',
       		'libs/bootstrap.min.js',
       		'libs/jquery.js',
       		'libs/metisMenu.js',
       		'libs/sb-admin-2.js'

       	], './public/js/lib.js')

*/