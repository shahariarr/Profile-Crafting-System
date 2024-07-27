<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/backend.css?v=1.0.0')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/remixicon/fonts/remixicon.css')}}">

    <style>


        body {
            background: linear-gradient(to right, #7e38c9 0%, #e5e7ec1a 100%);
            font-family: 'Nunito', sans-serif;
        }
        .auth-card {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .floating-label.form-group {
            position: relative;
        }
        .floating-input {
            border: 1px solid #ccc;
            border-radius: 25px;
            padding: 10px 15px;
            width: 100%;
        }
        .floating-label label {
            position: absolute;
            top: 10px;
            left: 15px;
            background: #ffffff;
            padding: 0 5px;
            transition: all 0.2s;
            color: #999;
        }
        .floating-input:focus + label,
        .floating-input:not(:placeholder-shown) + label {
            top: -10px;
            font-size: 12px;
            color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 25px;
            padding: 10px 30px;
            color: #ffffff;
            font-size: 16px;
            transition: background-color 0.2s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-control.is-invalid, .was-validated .form-control:invalid {
            border-color: #dc3545;
        }
        .invalid-feedback {
            display: block;
        }

    </style>

    @stack('styles')
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        @include('inc.sidebar-user')

        @include('inc.topbar')

        <div class="content-page">
            <div class="container-fluid">

                @yield('content')

            </div>
        </div>
    </div> <br>
    <!-- Wrapper End-->
    {{-- <footer class="iq-footer">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy
                                        Policy</a></li>
                                <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of
                                        Use</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-right">
                            <span class="mr-1">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>©
                            </span> <a href="#" class="">Make Profile</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}
    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('/assets/js/backend-bundle.min.js')}}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{asset('/assets/js/table-treeview.js')}}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{asset('/assets/js/customizer.js')}}"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="{{asset('/assets/js/chart-custom.js')}}"></script>

    <!-- app JavaScript -->
    <script src="{{asset('/assets/js/app.js')}}"></script>





    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    @stack('scripts')
</body>

</html>

