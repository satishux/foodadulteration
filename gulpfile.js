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
    //mix.copy([
    //    "resources/assets/css"
    //], "public/css");
    //
    //
    //mix.copy([
    //    "resources/assets/js"
    //], "public/js");

    mix.styles([
        "resources/assets/css/knight-iconfont.css"
    ], "public/css/knight-iconfont.css");

    mix.styles([
        "resources/assets/css/font-awesome.min.css"
    ], "public/css/font-awesome.min.css");

    mix.styles([
        "resources/assets/css/bootstrap.min.css"
    ], "public/css/bootstrap.min.css");

    mix.styles([
        "resources/assets/css/reset.css"
    ], "public/css/reset.css");

    mix.styles([
        "resources/assets/css/animate.css"
    ], "public/css/animate.css");

    mix.styles([
        "resources/assets/css/jquery.fs.shifter.css"
    ], "public/css/jquery.fs.shifter.css");

    mix.styles([
        "resources/assets/css/main.css"
    ], "public/css/main.css");

    mix.styles([
        "resources/assets/css/shortcodes.css"
    ], "public/css/shortcodes.css");

    mix.styles([
        "resources/assets/css/custom-bg.css"
    ], "public/css/custom-bg.css");

    mix.styles([
        "resources/assets/css/custom.css"
    ], "public/css/custom.css");


    mix.scripts([
        "resources/assets/js/vendor/modernizr-2.6.2.min.js"
    ], "public/js/modernizr-2.6.2.min.js");

    mix.scripts([
            "resources/assets/js/vendor/jquery.min.js"
        ], "public/js/jquery.min.js");

    mix.scripts([
            "resources/assets/js/jquery.fs.shifter.min.js"
        ], "public/js/jquery.fs.shifter.min.js");

    mix.scripts([
            "resources/assets/js/jquery.stellar.min.js"
        ], "public/js/jquery.stellar.min.js");

    mix.scripts([
        "resources/assets/js/imagesloaded.pkgd.min.js"
    ], "public/js/imagesloaded.pkgd.min.js");

    mix.scripts([
            "resources/assets/js/bootstrap.min.js"
        ], "public/js/bootstrap.min.js");

    mix.scripts([
            "resources/assets/js/wow.min.js"
        ], "public/js/wow.min.js");

    mix.scripts([
            "resources/assets/js/main.js"
        ], "public/js/main.js");

    mix.scripts([
        "resources/assets/js/jquery.countTo.js"
    ], "public/js/jquery.countTo.js");

    mix.scripts([
        "resources/assets/js/jquery.appear.js"
    ], "public/js/jquery.appear.js");

});
