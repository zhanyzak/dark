<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>@yield('title')</title>

        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Libs CSS Files -->
        <link href="{{asset('darkassets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('darkassets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('darkassets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('darkassets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('darkassets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('darkassets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('darkassets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('darkassets/css/dark.css')}}" rel="stylesheet">
        <link href="{{ asset('css/dark.css') }}" rel="stylesheet">
    </head>

    <body>

        <!-- ======= Top Bar ======= -->
        @include('web.layouts.topbar')
        <!-- =====End TopBar ======= -->

        <!-- ======= Header ======= -->
        @include('web.layouts.header')
        <!--======= End Header =====-->

        <main id="main">

            @yield('content')
        
        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        @include('web.layouts.footer')
        <!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{asset('darkassets/vendor/aos/aos.js')}}"></script>
        <script src="{{asset('darkassets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('darkassets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('darkassets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('darkassets/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{asset('darkassets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('darkassets/vendor/waypoints/noframework.waypoints.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{asset('darkassets/js/dark.js')}}"></script>

    </body>

</html>