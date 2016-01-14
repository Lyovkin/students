var elixir = require('laravel-elixir');
elixir.config.sourcemaps = false;
var paths = {
    'jquery': './vendor/bower_components/jquery/',
    'bootstrap': './vendor/bower_components/bootstrap/',
    'angular': './vendor/bower_components/angular/',
    'fawesome': './vendor/bower_components/font-awesome/', //font-awesome
    'customcss': './public/'
};

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

elixir(function(mix) {
    mix.scripts([
        paths.jquery    + 'dist/jquery.min.js',
        paths.angular   + 'angular.min.js',
        paths.bootstrap + 'js/dropdown.js'
    ], 'public/js/app.js')


});

elixir(function(mix) {
    mix.styles([
       paths.bootstrap + 'dist/css/bootstrap.min.css',
       paths.fawesome  + 'css/font-awesome.css',
       paths.customcss + 'css/custom.css'
    ], 'public/css/app.css');
});

elixir(function(mix) {
   mix.copy(paths.bootstrap + 'fonts/**', 'public/fonts')
       .copy(paths.fawesome + 'fonts/**', 'public/fonts')
});