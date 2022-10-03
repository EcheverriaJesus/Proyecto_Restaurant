const mix = require('laravel-mix');

/*mix.styles('resources/css/*.css', 'public/css/app.css');*/
mix.sass("resources/css/main.scss", "public/css/styles.css")
.browserSync("http://Restaurant_Noe.test:8080/");