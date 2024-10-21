const mix = require('laravel-mix');

mix.styles([
    'public/css/animate.css',
    'public/css/all.min.css',
    'public/css/ionicons.min.css',
    'public/css/themify-icons.css',
    'public/css/linearicons.css',
    'public/css/simple-line-icons.css',
    'public/owlcarousel/css/owl.carousel.min.css',
    'public/owlcarousel/css/owl.theme.css',
    'public/owlcarousel/css/owl.theme.default.min.css',
    'public/css/magnific-popup.css',
    'public/css/jquery-ui.css',
    'public/css/slick.css',
    'public/css/slick-theme.css',
    'public/css/root.css',
    'public/css/main.css',
    'public/css/style.css',
    'public/css/responsive.css',
], 'public/css/site.css');

mix.scripts([
    'public/js/jquery-3.7.1.min.js',
    'public/js/jquery-ui.js',
    'public/js/popper.min.js',
    'public/owlcarousel/js/owl.carousel.min.js',
    'public/js/magnific-popup.min.js',
    'public/js/waypoints.min.js',
    'public/js/parallax.js',
    'public/js/jquery.countdown.min.js',
    'public/js/imagesloaded.pkgd.min.js',
    'public/js/isotope.min.js',
    'public/js/slick.min.js',
    'public/js/jquery.elevatezoom.js',
    'public/js/map.js',
    'public/js/scripts.js',
    'public/js/app.js',
], 'public/js/site.js');

mix.minify('public/css/site.css');
mix.minify('public/js/site.js');
