<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>POS Dash | Responsive Bootstrap 4 Admin Dashboard Template</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico" ')}}/>
      <link rel="stylesheet" href="{{asset('/assets/css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{asset('/assets/css/backend.css?v=1.0.0')}}">
      <link rel="stylesheet" href="{{asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('/assets/vendor/remixicon/fonts/remixicon.css')}}">
    </head>
  <body class=" ">
    <!-- loader Start -->
    {{-- <div id="loading">
          <div id="loading-center">
          </div>
    </div> --}}
    <!-- loader END -->

      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            @yield('content')
         </div>
      </section>
      </div>

    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="../assets/js/chart-custom.js"></script>

    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
  </body>
</html>
