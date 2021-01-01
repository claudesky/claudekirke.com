const mix = require('laravel-mix');

if (process.env.NODE_ENV == 'production'){

    mix.setPublicPath('public');
    mix.version();

} else if (process.env.NODE_ENV == 'development'){

    mix.setPublicPath('public/dev');

}

mix.js('resources/js/app.js', 'js')
    .postCss('resources/css/app.css', 'css');
