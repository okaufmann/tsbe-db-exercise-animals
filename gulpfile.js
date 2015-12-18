//Disable Notifications
process.env.DISABLE_NOTIFIER = true;

var elixir = require('laravel-elixir');

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

elixir.config.sourcemaps = false;

var paths = {
    'sweetalert': 'vendor/sweetalert/dist',
    'bootstrap': 'vendor/bootstrap/dist',
    'jquery': 'vendor/jquery/dist'
};

elixir(function (mix) {

    //mix.sass('app.scss', 'resources/assets/css/app.css'); //bootstrap is loaded through cdn

    mix.styles([
        paths.sweetalert + '/sweetalert.css',
        'assets/css/app.css'
    ], 'public/css', 'resources/');

    mix.scripts([
        'resources/' + paths.jquery + '/jquery.js',
        'resources/' + paths.bootstrap + '/js/bootstrap.js',
        'resources/' + paths.sweetalert + '/sweetalert.min.js'
    ], 'public/js', 'resources/');

    mix.version([
        'css/all.css',
        //'fonts/', //bootstrap is loaded through cdn
        'js/all.js'
    ])
});
