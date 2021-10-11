<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <!-- ========== SEO ========== -->
  <title>Hotel Himara - Hotel HTML Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta content="" name="author">
  <!-- ========== FAVICON ========== -->
  <link rel="apple-touch-icon-precomposed" href="{{ asset('/public/images/favicon-apple.png') }}" />
  <link rel="icon" href="{{ asset('/public/public/images/favicon.png') }}">
  <!-- ========== STYLESHEETS ========== -->
  <link rel="stylesheet" href="{{ asset('/public/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/public/css/bootstrap-select.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/public/css/jquery.mmenu.css') }}">
  <link rel="stylesheet" href="{{ asset('/public/revolution/css/layers.css') }}">
  <link rel="stylesheet" href="{{ asset('/public/revolution/css/settings.css') }}">
  <link rel="stylesheet" href="{{ asset('/public/revolution/css/navigation.css') }}">
  <link rel="stylesheet" href="{{ asset('/public/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/public/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/public/css/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('/public/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('/public/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/public/css/responsive.css') }}">
  <!-- ========== ICON FONTS ========== -->
  <link href="{{ asset('/public/fonts/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/public/fonts/flaticon.css') }}" rel="stylesheet">
  <!-- ========== GOOGLE FONTS ========== -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700"
    rel="stylesheet">
</head>

<body>
  @yield('before_wrapper')
  <!-- ========== MOBILE MENU ========== -->
  <nav id="mobile-menu"></nav>
  <!-- ========== WRAPPER ========== -->
  <div class="wrapper">
    @yield('content')
  </div>
  @yield('after_wrapper')
  <!-- ========== BACK TO TOP ========== -->
  @include('front.partials.layout.back-to-top')
  <!-- ========== JAVASCRIPT ========== -->
  <script src="{{ asset('/public/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/public/http://maps.google.com/maps/api/js?key=YOUR_API_KEY') }}"></script>
  <script src="{{ asset('/public/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/public/js/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('/public/js/jquery.mmenu.js') }}"></script>
  <script src="{{ asset('/public/js/jquery.inview.min.js') }}"></script>
  <script src="{{ asset('/public/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('/public/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('/public/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/public/js/owl.carousel.thumbs.min.js') }}"></script>
  <script src="{{ asset('/public/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/public/js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('/public/js/masonry.pkgd.min.js') }}"></script>
  <script src="{{ asset('/public/js/wow.min.js') }}"></script>
  <script src="{{ asset('/public/js/countup.min.js') }}"></script>
  <script src="{{ asset('/public/js/moment.min.js') }}"></script>
  <script src="{{ asset('/public/js/daterangepicker.js') }}"></script>
  <script src="{{ asset('/public/js/parallax.min.js') }}"></script>
  <script src="{{ asset('/public/js/smoothscroll.min.js') }}"></script>
  <script src="{{ asset('/public/js/instafeed.min.js') }}"></script>
  <script src="{{ asset('/public/js/main.js') }}"></script>
  <!-- ========== REVOLUTION SLIDER ========== -->
  <script src="{{ asset('/public/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
  <script src="{{ asset('/public/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
  <script src="{{ asset('/public/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
  <script src="{{ asset('/public/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
  <script src="{{ asset('/public/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
  <script src="{{ asset('/public/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
  <script src="{{ asset('/public/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
  <script src="{{ asset('/public/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
  <script src="{{ asset('/public/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
  <script src="{{ asset('/public/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
  <script src="{{ asset('/public/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
</body>

</html>
