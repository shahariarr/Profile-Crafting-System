<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clark - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front-end/assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css') }}">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    @include('Front_End.inc.header')
    <!-- End Header -->
    <main id="main">
      @yield('content')
    </main>
    <!-- ======= Footer ======= -->
    @include('Front_End.inc.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>

    <script src="{{ asset('front-end/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/aos.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/main.js') }}"></script>

</body>

</html>
