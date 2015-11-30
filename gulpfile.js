var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | PUBLIC ASSETS
 |--------------------------------------------------------------------------
 */

var bowers = '../bower_components/';

elixir(function(mix) {
	mix.sass('app.scss', 'resources/assets/css/app.css')
    	.styles([
          'libs/bootstrap.custom.css',
          bowers + 'sweetalert/dist/sweetalert.css',
          bowers + 'wowjs/css/libs/animate.css',
          bowers + 'fontawesome/css/font-awesome.css',
          'app.css'
    	], 'public/css/public.css')

      .scripts([
          bowers + 'jquery/dist/jquery.js',
          bowers + 'sweetalert/dist/sweetalert.min.js',
          bowers + 'wowjs/dist/wow.js',
          'libs/modernizr.custom.js',
          'libs/classie.js',
          'libs/mobile-menu.js',
          'app.js'
      ], 'public/js/public.js')

      .styles([
          bowers + 'materialize/dist/css/materialize.css',
        ], 'public/css/materialize.css')

      .scripts([
          bowers + 'materialize/dist/js/materialize.js',
          'materialize.js'
        ], 'public/js/materialize.js')

      .scripts([
        'libs/stripe-billing.js'
        ], 'public/js/stripe-billing.js')

      .scripts([
        'libs/twocheckout-billing.js'
        ], 'public/js/twocheckout-billing.js')

      // .styles([
      //   'libs/hero-slider.css'
      //   ], 'public/css/hero-slider.css')

      .styles([
        bowers + 'owl-carousel/owl-carousel/owl.carousel.css',
        bowers + 'owl-carousel/owl-carousel/owl.theme.css'
        ], 'public/css/owl-carousel.css')

      // .scripts([
      //   'libs/hero-slider.js'
      //   ], 'public/js/hero-slider.js')

      .scripts([
        'libs/home-video.js'
        ], 'public/js/home-video.js')      

      .scripts([
        bowers + 'owl-carousel/owl-carousel/owl.carousel.js',
        'libs/owl-carousel.js'
        ], 'public/js/owl-carousel.js')

      .styles([
        'libs/triangle/card.css',
        'libs/triangle/pattern.css'
        ], 'public/css/triangle.css')

      .scripts([  
          'libs/triangle/trianglify.min.js',
          'libs/triangle/TweenMax.min.js',
          'libs/triangle/ScrollToPlugin.min.js',
          'libs/triangle/cash.min.js',
          'libs/triangle/Card-circle.js',
          'libs/triangle/triangle.js'
        ], 'public/js/triangle.js');
  

/*
 |--------------------------------------------------------------------------
 | ADMIN ASSETS
 |--------------------------------------------------------------------------
 */

 mix.sass('admin.scss', 'resources/assets/css/admin/admin.css')
    
    .styles([
      'admin/admin.css',
      'admin/sb-admin.css',
      bowers + 'fontawesome/css/font-awesome.css',
      bowers + 'sweetalert/dist/sweetalert.css',
      bowers + 'metisMenu/dist/metisMenu.css'
      ], 'public/css/admin.css')

    .scripts([
      'libs/modernizr.custom.js',
      bowers + 'jquery/dist/jquery.js',
      bowers + 'bootstrap/dist/js/bootstrap.js',
      bowers + 'sweetalert/dist/sweetalert.min.js',
      bowers + 'metisMenu/dist/metisMenu.js',
      'admin/admin.js',
      'admin/sb-admin.js'

      ], 'public/js/admin.js')

    .styles([
      bowers + 'dropzone/dist/dropzone.css'
      ], 'public/css/dropzone.css')

    .scripts([
      bowers + 'dropzone/dist/dropzone.js',
      'admin/dropzone.js'
      ], 'public/js/dropzone.js')

    .version([
      'css/public.css',
      'js/public.js',

      'css/materialize.css',
      'js/materialize.js',

      'js/stripe-billing.js',
      'js/twocheckout-billing.js',
      
      //'css/bootstrap.custom.css', 
      // 'css/hero-slider.css',
      // 'js/hero-slider.js',

      'js/home-video.js',

      'css/triangle.css',
      'js/triangle.js',
      
      'css/owl-carousel.css',
      'js/owl-carousel.js',

      'css/admin.css',
      'js/admin.js',

      'css/dropzone.css',
      'js/dropzone.js'
      ]);
});
