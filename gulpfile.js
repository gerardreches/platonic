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

elixir(function(mix) {

	mix.browserSync({
        proxy: 'platonic.dev'
    });

	/*
    mix.sass('platonic.scss', 'public/css/platonic.css');

    mix.styles([
        'normalize.css',
        'platonic.css'
    ], 'resources/assets/css', 'public/css');
	*/

});
