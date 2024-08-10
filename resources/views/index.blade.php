<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta
        content="A multi-step form is a long-form broken down into multiple pieces/steps to make an otherwise long form less intimidating for visitors to complete."
        name="description">
    <meta content="Sam Norton" name="author">
    <title>Profile Crafting System</title>
    <!-- FAVICONS -->
    {{-- <link href="favicons/apple-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
    <link href="favicons/apple-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
    <link href="favicons/apple-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="favicons/apple-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
    <link href="favicons/apple-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="favicons/apple-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
    <link href="favicons/apple-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
    <link href="favicons/apple-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
    <link href="favicons/apple-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
    <link href="favicons/android-icon-192x192.png" rel="icon" sizes="192x192" type="image/png">
    <link href="favicons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="favicons/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
    <link href="favicons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="https://designmodo.static.domains/manifest.json" rel="manifest"> --}}
    <meta content="#ffffff" name="msapplication-TileColor">
    <meta content="favicons/ms-icon-144x144.png" name="msapplication-TileImage">
    <meta content="#ffffff" name="theme-color">
    <!-- CSS -->
    <link href="{{ asset('main_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('main_assets/css/style.css') }}" rel="stylesheet">
    <!-- FONT -->
    <link href="https://fonts.gstatic.com/" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&amp;display=swap"
        rel="stylesheet">
    <style>
        #title-container {
            min-height: 460px;
            height: 100%;
            color: #fff;
            background-color: #32bdea;
            text-align: center;
            padding: 105px 28px 28px 28px;
            box-sizing: border-box;
            position: relative;
            box-shadow: 10px 8px 21px 0px rgba(204, 204, 204, 0.75);
            -webkit-box-shadow: 10px 8px 21px 0px rgba(204, 204, 204, 0.75);
            -moz-box-shadow: 10px 8px 21px 0px rgba(204, 204, 204, 0.75);
        }

        button#prev-btn,
        button#next-btn,
        button#submit-btn {
            font-size: 17px;
            font-weight: bold;
            position: relative;
            width: 130px;
            height: 50px;
            background: #32bdea;
            margin: 0 auto;
            margin-top: 40px;
            overflow: hidden;
            z-index: 1;
            cursor: pointer;
            transition: color .3s;
            text-align: center;
            color: #fff;
            border: 0;
            -webkit-border-bottom-right-radius: 5px;
            -webkit-border-bottom-left-radius: 5px;
            -moz-border-radius-bottomright: 5px;
            -moz-border-radius-bottomleft: 5px;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        button#prev-btn:after,
        button#next-btn:after,
        button#submit-btn:after {
            position: absolute;
            top: 90%;
            left: 0;
            width: 100%;
            height: 100%;
            background: #0958b3;
            content: "";
            z-index: -2;
            transition: transform .3s;
        }

        #title-container h3 {
            font-size: 25px;
            font-weight: 600;
            color: #34292a;
            padding: 0;
        }

        .bg-danger {
            background-color: #0958b3 !important;
        }

        .question__input:checked+.question__label:before {
            background-color: #0958b3;
            box-shadow: 0 0 0 0;
        }

        #success h4 {
            color: #0958b3;
        }

        .back-link {
            font-weight: 700;
            color: #0958b3;
            text-decoration: none;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <!-- CONTAINER -->
    <div class="container d-flex align-items-center min-vh-100">
        <div class="row g-0 justify-content-center">
            <!-- TITLE -->
            <div class="col-lg-4 offset-lg-1 mx-0 px-0">
                <div id="title-container">
                    <img class="covid-image" src="{{ asset('main_assets/img/covid-check.png') }}">
                    <h2>Profile Crafting System</h2>
                    <h3>Make your profile</h3>
                    <p>The primary objective of the Profile Crafting System project is to create a simple and
                        user-friendly platform that allows users to build their personal profiles and portfolio websites
                        without any coding skills. This software enables users to input their information and
                        automatically generate a professional portfolio website and an industrial CV, which can be used
                        for job or career purposes.</p>
                </div>
            </div>
            <!-- FORMS -->
            <div class="col-lg-7 mx-0 px-0">
                <div class="progress">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50"
                        class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar"
                        style="width: 0%"></div>
                </div>
                <div id="qbox-container">
                    <form class="needs-validation" id="form-wrapper" method="post" name="form-wrapper" novalidate="">
                        <div id="steps-container">
                            <div class="step">
                                <h4>Features of this software</h4>
                                <ul>
                                    <li><strong>User-Friendly Interface:</strong> Easy navigation and usability.</li>
                                    <li><strong>Automatic Portfolio Generation:</strong> Automatically creates a website
                                        from the inputted data.</li>
                                    <li><strong>Industrial CV Generation:</strong> Generates a professional CV for work
                                        and career purposes.</li>
                                    <li><strong>Responsive Design:</strong> Accessible on both mobile and desktop
                                        platforms.</li>
                                    <li><strong>Secure Data Handling:</strong> User data will be stored securely.</li>
                                </ul>
                            </div>
                            <div class="step">
                                <h4>Do you currently have a portfolio website? (Yes/No)</h4>
                                <div class="form-check ps-0 q-box">
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_2_yes" name="q_2"
                                            type="radio" value="Yes">
                                        <label class="form-check-label question__label" for="q_2_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input checked class="form-check-input question__input" id="q_2_no"
                                            name="q_2" type="radio" value="No">
                                        <label class="form-check-label question__label" for="q_2_no">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <h4>Do you already have a CV or resume? (Yes/No)</h4>
                                <div class="form-check ps-0 q-box">
                                    <div class="q-box__question">
                                        <input class="form-check-input question__input" id="q_3_yes" name="q_3"
                                            type="radio" value="Yes">
                                        <label class="form-check-label question__label" for="q_3_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                        <input checked class="form-check-input question__input" id="q_3_no"
                                            name="q_3" type="radio" value="No">
                                        <label class="form-check-label question__label" for="q_3_no">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <h4>Which social media platforms do you actively use for professional purposes?</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input q-checkbox"
                                                    id="q_4_uk" name="q_4" type="checkbox" value="uk">
                                                <label class="form-check-label question__label"
                                                    for="q_4_uk">Facebook</label>
                                            </div>
                                        </div>
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="q_4_us"
                                                    name="q_4" type="checkbox" value="us">
                                                <label class="form-check-label question__label"
                                                    for="q_4_us">Instagram</label>
                                            </div>
                                        </div>
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="q_4_br"
                                                    name="q_3" type="checkbox" value="br">
                                                <label class="form-check-label question__label"
                                                    for="q_4_br">Twitter</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="q_4_de"
                                                    name="q_4" type="checkbox" value="de">
                                                <label class="form-check-label question__label"
                                                    for="q_4_de">LinkedIn</label>
                                            </div>
                                        </div>
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="q_4_in"
                                                    name="q_4" type="checkbox" value="in">
                                                <label class="form-check-label question__label"
                                                    for="q_4_in">TikTok</label>
                                            </div>
                                        </div>
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="q_4_eu"
                                                    name="q_4" type="checkbox" value="eu">
                                                <label class="form-check-label question__label"
                                                    for="q_4_eu">YouTube</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="q_4_none"
                                                    name="q_4" type="checkbox" value="none">
                                                <label class="form-check-label question__label" for="q_4_none">If you
                                                    do Coding, You will definitely love GitHub</label>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Would you like to include links to these profiles in your portfolio?</p>
                                </div>
                            </div>
                            <div class="step">
                                <h4>What are your short-term career goals?</h4>
                                <div class="row">
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input" id="q_5_breathing"
                                                name="q_5_breathing" type="checkbox" value="breathing">
                                            <label class="form-check-label question__label"
                                                for="q_5_breathing">Finding a new job
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input" id="q_5_chest"
                                                name="q_5_chest" type="checkbox" value="chest pain">
                                            <label class="form-check-label question__label"
                                                for="q_5_chest">Freelancing</label>
                                        </div>
                                    </div>
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input" id="q_5_speech"
                                                name="q_5_speech" type="checkbox" value="speech problem">
                                            <label class="form-check-label question__label" for="q_5_speech">Expanding
                                                my skills/learning new technologies</label>
                                        </div>
                                    </div>
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input" id="q_5_pale"
                                                name="q_5_pale" type="checkbox" value="pale">
                                            <label class="form-check-label question__label" for="q_5_pale">Other
                                                activities</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <h4>Software Outcome</h4>
                                <p>With the Profile Crafting System, users can create their profiles and portfolio
                                    websites without any coding skills. They can use these websites and CVs to advance
                                    their careers and for job applications. The project has been successfully completed,
                                    and the website is live for users' convenience.</p>

                            </div>
                            <div class="step">
                                <div class="mt-1">
                                    <div class="closing-text">
                                        <h4>Our mission and vision</h4>
                                        <p>The Profile Crafting System project will serve as a groundbreaking tool for
                                            users. It provides an extremely effective and time-saving solution for
                                            creating professional profiles. Future developments and new feature
                                            additions will enhance the project, making it even more effective and
                                            useful.</p>
                                        <p>Click on the submit button to continue.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="success">
                                <div class="mt-5">
                                    <h4>Success! "Thank you for joining us on this journey." </h4>
                                    <p>Best wishes for your journey ahead. May you achieve great things in the future,
                                        and you have our heartfelt prayers..</p>
                                    <a  href="{{ route('register') }}">Create your portfolio website
                                        and professional CV effortlessly with our tool ➜ Click now</a>
                                </div>
                            </div>
                        </div>
                        <div id="q-box__buttons">
                            <button id="prev-btn" type="button">Previous</button>
                            <button id="next-btn" type="button">Next</button>
                            <button id="submit-btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- PRELOADER -->
    <div id="preloader-wrapper">
        <div id="preloader"></div>
        <div class="preloader-section section-left"></div>
        <div class="preloader-section section-right"></div>
    </div>
    <script src="{{ asset('main_assets/js/script.js') }}"></script>
    {{-- <!-- Static App Form Collection Script -->
<script src="{{asset('main_assets/static.app/js/static-forms.js')}}" type="text/javascript"></script>
<!-- Static App Form Collection Script -->
<script src="{{asset('main_assets/static.app/js/static-forms.js')}}" type="text/javascript"></script>
<!-- Static App Form Collection Script -->
<script src="#" type="text/javascript"></script>
<!-- Static App Form Collection Script -->
<script src="#" type="text/javascript"></script> --}}
</body>

<!-- Mirrored from designmodo.static.domains/bootstrap5form/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 04:53:22 GMT -->

</html>
