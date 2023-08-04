<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @stack('pageName') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('user/assets/styles/vendor/bootstrap.min.css') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('user/assets/fonts/et-lineicons/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/fonts/linea-font/css/linea-font.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/fonts/fontawesome/css/font-awesome.min.css') }}">
    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('user/assets/styles/vendor/slick.css') }}">
    <!-- Lightbox -->
    <link rel="stylesheet" href="{{ asset('user/assets/styles/vendor/magnific-popup.css') }}">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('user/assets/styles/vendor/animate.css') }}">

    <!-- Definity CSS -->
    <link rel="stylesheet" href="{{ asset('user/assets/styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/styles/responsive.css') }}">

    <!-- JS -->
    <script src="{{ asset('user/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    @stack('style')
    @if (Session::has('message'))
        @include('toastr.toastrstyle')
    @endif


</head>

<body id="page-top">

    @php
        use Illuminate\Support\Facades\Route;
        $currentPath = Route::getFacadeRoot()
            ->current()
            ->uri();
    @endphp
    @if ($currentPath != 'login')
        @include('user.inc.navbar')
    @endif

    @yield('content')
    <!-- ========== Footer Widgets ========== -->
    @include('user.inc.footer')

    <!-- ========== Scripts ========== -->

    <script src="{{ asset('user/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/google-fonts.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/jquery.easing.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/smoothscroll.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/jquery.localScroll.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/jquery.parallax.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/countup.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/isotope.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/vendor/jquery.ajaxchimp.js') }}"></script>


    <!-- Google Maps -->
    <script src="{{ asset('user/assets/js/gmap.js') }}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOcd7o0W0r846FC_GoHSK56xeAvP8fV4s"></script>

    <!-- Definity JS -->
    <script src="{{ asset('user/assets/js/main.js') }}"></script>

    @stack('script')

    @if (Session::has('message'))
        @include('toastr.toastrscript')
    @endif


</body>

</html>
