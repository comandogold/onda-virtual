const mix = require('laravel-mix');


mix.js([
	'resources/js/app.js',
	'resources/js/ajax.js'
	],'public/js')
   .sass('resources/sass/app.scss', 'public/css');
   
mix.js('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js');