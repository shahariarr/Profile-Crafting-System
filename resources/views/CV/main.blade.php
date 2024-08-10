@php
    $profile = App\Models\Profile::where('user_id', auth()->id())->first();
    $user = auth()->user();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>

    <!-- Meta -->
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('front-end/xxx/assets/fontawesome/js/all.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>


    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('front-end/xxx/assets/css/devresume.css') }}">
</head>

<body>
    <!-- DEMO ONLY -->
    <div class="demo-banner px-2 py-3 text-white text-center font-weight-bold bg-primary">Want to download your CV? Just
        click the "Download CV" button over here.<br class="d-lg-none">
        <button class="btn demo-btn-on-bg text-white font-weight-bold ms-2 mt-2 mt-lg-0" id="download">
            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M16.444 18H19a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h2.556M17 11V5a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v6h10ZM7 15h10v4a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-4Z" />
            </svg>Download CV
        </button>

    </div>

    <div class="main-wrapper">

        @yield('content')

        <footer class="footer text-center py-4">
            <small class="copyright text-muted">Designed with <span class="sr-only">love</span><i
                    class="fas fa-heart"></i> by <a class="theme-link" href="http://themes.3rdwavemedia.com"
                    target="_blank">Xiaoying Riley</a> for developers</small>
        </footer>
    </div><!--//main-wrapper-->





</body>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("download").addEventListener("click", function () {
            const element = document.getElementById('cv-content');

            const opt = {
                margin: -0.7,
                filename: 'my_cv.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'in',
                    format: 'a4',
                    orientation: 'portrait'
                }
            };

            // element.style.padding = '10px';
            element.style.border = '0.5px';



            // Ensure images are not larger than the container width
            const images = element.getElementsByTagName('img');
            for (let i = 0; i < images.length; i++) {
                images[i].style.maxWidth = '100%';
                images[i].style.height = 'auto';
            }

            // Generate and save the PDF
            html2pdf().from(element).set(opt).save();
        });
    });
</script>

</html>
