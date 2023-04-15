<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>JAN INTERNATIONAL EKSPORT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Memuat file CSS dengan fungsi asset() -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/line-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icofont.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/preset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/presets/color1.css') }}" id="colorChange" rel="stylesheet">
    <link href="{{ asset('css/StyleGrid.css') }}" rel="stylesheet">



  <link rel="icon" type="image/png" href="images/icon perushaan.png">
</head>

<body>

    @include('layouts.topbar')

    @yield('myconten')

    @include('layouts.footer')

  	<a href="#" id="backtotop"><i class="fal fa-angle-double-up"></i></a>

        <!-- Memuat file JavaScript dengan fungsi asset() -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.appear.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/jquery.shuffle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/modernizr.custom.js') }}"></script>
        <script src="{{ asset('js/dlmenu.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('js/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="{{ asset('js/theme.js') }}"></script>
        <script src="{{ asset('js/email-decode.min.js') }}" data-cfasync="false"></script>


</body>


</html>

