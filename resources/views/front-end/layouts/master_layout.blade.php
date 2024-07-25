<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from hamyz-portfolio.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jul 2024 11:07:52 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hamyz's Personal Portfolio</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="{{asset('front-end/assets/images/logo.ico')}}" type="image/x-icon">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{asset('front-end/assets/css/style.css')}}">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="{{asset('front-end/https://fonts.googleapis.com/')}}">
    <link rel="preconnect" href="{{asset('front-end/https://fonts.gstatic.com/')}}" crossorigin>
    <link href="{{asset('front-end/https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap')}}"
        rel="stylesheet">
</head>

<body>
    <main>

    @include('front-end.inc.sidebar')


    <div class="main-content">

        @include('front-end.inc.header')
        @yield('content')
    </div>


    </main>

    <!--
    - custom js link
  -->
    <script src="{{asset('front-end/assets/js/script.js')}}"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="{{asset('front-end/../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
    <script nomodule src="{{asset('front-end/../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>

</body>


<!-- Mirrored from hamyz-portfolio.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jul 2024 11:08:14 GMT -->

</html>
