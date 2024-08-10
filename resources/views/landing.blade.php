<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />

  <title>Profile Crafting System</title>
  <meta name="description" content />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  {{-- <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png" /> --}}

  <link rel="stylesheet" href="{{ asset('landing_page/assets/css/animate.css') }}" />

  <link rel="stylesheet" href="{{ asset('landing_page/assets/css/tiny-slider.css') }}" />

  <link rel="stylesheet" href="{{ asset('landing_page/assets/css/swiper.min.css') }}" />

  <link rel="stylesheet" href="{{ asset('landing_page/assets/css/glightbox.min.css') }}" />

  <link rel="stylesheet" href="{{ asset('landing_page/assets/css/lineicons.css') }}" />

  <link rel="stylesheet" href="{{ asset('landing_page/assets/css/bootstrap.min.css') }}" />

  <link rel="stylesheet" href="{{ asset('landing_page/assets/css/style.css') }}" />
</head>

<body>
  <div class="preloader">
    <div class="loader">
      <div class="spinner">
        <div class="spinner-container">
          <div class="spinner-rotator">
            <div class="spinner-left">
              <div class="spinner-circle"></div>
            </div>
            <div class="spinner-right">
              <div class="spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <header class="header_area">
    <div id="header_navbar" class="header_navbar">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="index-2.html">
                {{-- <img id="logo" src="assets/images/logo.svg" alt="Logo" /> --}}
                <h3>Profile Crafting System</h3>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
              </button>
              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul id="nav" class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="page-scroll active" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#feature">Feature</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#how-work">How it Works</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#screenshots">Screenshots</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#pricing">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>

            </nav>

          </div>
        </div>

      </div>

    </div>

  </header>


  <section id="home" class="hero-area bg_cover" style="background: url('{{ asset('landing_page/assets/images/hero-bg.png') }}')">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6">
          <div class="hero-content">
            <h2 class="wow fadeInUp" data-wow-delay=".2s">
                Profile Crafting System<br />
                Make your profile
            </h2>
            <p class="wow fadeInUp" data-wow-delay=".4s">
                The Profile Crafting System, users can create their IT Industrial CV and portfolio websites without any coding skills. They can use these websites and CV to advance their careers and for job applications.
            </p>
            <div class="hero-btns">
              <a href="{{ route('login') }}" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".45s">Login Now</a>

                <a href="{{ route('index') }}" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".45s">Create your account</a>

            </div>
          </div>
          <div class="counter-up">
            <div class="single-counter wow fadeInUp" data-wow-delay=".2s">
              <span id="secondo" class="countup" cup-end="35"> </span>
              <span>Download CV</span>
            </div>
            <div class="single-counter wow fadeInUp" data-wow-delay=".3s">
              <span id="secondo" class="countup" cup-end="25"> </span>
              <span>Users</span>
            </div>
            <div class="single-counter wow fadeInUp" data-wow-delay=".4s">
              <span id="secondo" class="countup" cup-end="7" cup-append="K">
              </span>
              <span>Reviews</span>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="hero-img">
            <img src="{{ asset('landing_page/assets/images/features-image-2.png') }}" alt class="wow fadeInRight" data-wow-delay=".2s" />
            <img src="{{ asset('landing_page/assets/images/features-image-1.png') }}" alt class="img-screen screen-1 wow fadeInUp"
              data-wow-delay=".25s" />
            {{-- <img src={{ asset('landing_page/"assets/images/features-image-2.png') }}" alt class="img-screen screen-2 wow fadeInUp"
              data-wow-delay=".3s" />
            <img src="{{ asset('landing_page/assets/images/features-image-2.png') }}" alt class="img-screen screen-3 wow fadeInUp"
              data-wow-delay=".35s" /> --}}
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="feature" class="feature-area pt-120">
    <div class="container">
      <div class="section-title">
        <h2 class="mb-60 wow fadeInUp" data-wow-delay=".2s">
          Awesome Software <br />
          Features
        </h2>
      </div>
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="single-feature item-1 wow fadeInUp" data-wow-delay=".2s">
            <div class="feature-icon icon-style gradient-1">
              <i class="lni lni-laptop-phone"> </i>
            </div>
            <div class="feature-content">
              <h4>User-Friendly Interface</h4>
              <p>
                Easy navigation and usability.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="single-feature item-2 wow fadeInUp" data-wow-delay=".4s">
            <div class="feature-icon icon-style gradient-2">
              <i class="lni lni-notepad"> </i>
            </div>
            <div class="feature-content">
              <h4>Automatic Portfolio Generation</h4>
              <p>
                Lorem Automatically creates a website from the inputted data.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="single-feature item-3 wow fadeInUp" data-wow-delay=".6s">
            <div class="feature-icon icon-style gradient-3">
              <i class="lni lni-dashboard"> </i>
            </div>
            <div class="feature-content">
              <h4>Industrial CV Generation</h4>
              <p>
                Generates a professional CV for work and career purposes.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="single-feature item-4 wow fadeInUp" data-wow-delay=".8s">
            <div class="feature-icon icon-style gradient-4">
              <i class="lni lni-protection"> </i>
            </div>
            <div class="feature-content">
              <h4>Secure Data Handling</h4>
              <p>
                User data will be stored securely.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="how-work" class="how-work-area pt-130">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-6">
          <div class="how-work-img text-center text-lg-left">
            <img src="assets/images/download-img.svg" alt class="w-100 wow fadeInLeft" data-wow-delay=".2s" />
            <img src="assets/images/dots-shape.svg" alt class="shape dots-shape wow fadeInUp" data-wow-delay=".3s" />
          </div>
        </div>
        <div class="col-xl-6 offset-xl-1 col-lg-6">
          <div class="how-work-content-wrapper">
            <div class="section-title">
              <h2 class="mb-45 wow fadeInUp" data-wow-delay=".2s">
                How does this Software Work?
              </h2>
              <p class="mb-35 wow fadeInUp" data-wow-delay=".3s">
                The Profile Crafting System works in the following steps:
              </p>
            </div>
            <div class="how-work-accordion accordion-style">
              <div class="accordion" id="accordionExample">
                <div class="single-accordion mb-30 wow fadeInUp" data-wow-delay=".2s">
                  <div class="accordion-btn">
                    <button class="btn-block text-start collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <span class="d-inline-flex mb-0 icon-style gradient-1">
                        <i class="lni lni-user"> </i>
                      </span>
                      <span>Portfolio Generation & Profile URL Sharing</span>
                    </button>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="accordion-content">
                        Once all the necessary information is provided, the software automatically generates a professional portfolio website.The portfolio is designed based on the data entered by the user, ensuring a personalized and professional appearance.
                    </div>
                  </div>
                </div>
                <div class="single-accordion mb-30 wow fadeInUp" data-wow-delay=".3s">
                  <div class="accordion-btn">
                    <button class="btn-block text-start collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      <span class="d-inline-flex mb-0 icon-style gradient-3">
                        <i class="lni lni-credit-cards"> </i>
                      </span>
                      <span>Automatic visiting card creation</span>
                    </button>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="accordion-content">
                        The system also generates a professional visiting card based on the user’s input, which can be downloaded and used for job  or career advancements.
                    </div>
                  </div>
                </div>
                <div class="single-accordion mb-30 wow fadeInUp" data-wow-delay=".4s">
                  <div class="accordion-btn">
                    <button class="btn-block text-start collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                      <span class="d-inline-flex mb-0 icon-style gradient-4">
                        <i class="lni lni-control-panel"> </i>
                      </span>
                      <span>Industrial CV Creation</span>
                    </button>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="accordion-content">
                        The system also generates a professional CV based on the user’s input, which can be downloaded and used for job applications or career advancements.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="download-btn wow fadeInUp" data-wow-delay=".5s">
              <a href="{{ route('index') }}" class="main-btn btn-hover">Create now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="screenshots" class="screenshot-area-wrapper pt-50">
    <div class="screenshot-area pt-90 pb-90">
      <div class="shapes">
        <img src="assets/images/ss-line.svg" alt class="line-shape-1 shape" />
        <img src="assets/images/ss-line.svg" alt class="line-shape-2 shape" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-8 col-md-10 mx-auto">
            <div class="section-title text-center">
              <h2 class="mb-30 wow fadeInUp" data-wow-delay=".2s">
                Software Screenshot
              </h2>
              <p class="mb-60 wow fadeInUp" data-wow-delay=".4s">
                Here are some screenshots of the software to guide you in using it effectively.

              </p>
            </div>
          </div>
        </div>
        <div class="screenshot-slider-wrapper swiper-container">
          <div class="screenshot-slider swiper-wrapper">
            <div class="single-screen swiper-slide">
              <img src="assets/images/screen-1.png" alt />
            </div>
            <div class="single-screen swiper-slide">
              <img src="assets/images/screen-2.png" alt />
            </div>
            <div class="single-screen swiper-slide">
              <img src="assets/images/screen-3.png" alt />
            </div>
            <div class="single-screen swiper-slide">
              <img src="assets/images/screen-4.png" alt />
            </div>
          </div>
          <div class="screenshot-frame">
            <img src="assets/images/screen-active.png" alt />
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="pricing" class="pricing-area pt-120">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-8 col-md-10 mx-auto">
          <div class="section-title text-center">
            <h2 class="mb-30 wow fadeInUp" data-wow-delay=".2s">
                Affordable Excellence
            </h2>
            <p class="mb-50 wow fadeInUp" data-wow-delay=".4s">
                Get Premium Quality at a Reasonable Price
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mx-auto">
          <div class="pricing-nav">
            <ul class="
                  nav nav-pills
                  justify-content-center
                  align-items-center
                  mb-50
                  wow
                  fadeInUp
                " data-wow-delay=".2s" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-month-tab" data-bs-toggle="pill" href="#pills-month" role="tab"
                  aria-controls="pills-month" aria-selected="true">Monthly</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-year-tab" data-bs-toggle="pill" href="#pills-year" role="tab"
                  aria-controls="pills-year" aria-selected="false">Yearly</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade price-tab show active" id="pills-month" role="tabpanel"
                aria-labelledby="pills-month-tab">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-price text-center">
                      <div class="price-icon icon-style mx-auto gradient-1">
                        <i class="lni lni-user"> </i>
                      </div>
                      <h4 class="package-name mb-20">Personal</h4>
                      <h4 class="package-price mb-20">$0.0</h4>
                      {{-- <ul class="package-details">
                        <li>5 Cards</li>
                        <li>50GB Disk Space</li>
                        <li>50GB Monthly Bandwidth</li>
                        <li>10 Subdomains</li>
                        <li>15 Domains</li>
                        <li>Unlimited Support</li>
                      </ul> --}}
                      <a href="javascript:void(0)" class="btn-hover price-btn main-btn">Free Now</a>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-price text-center active">
                      <div class="price-icon icon-style mx-auto gradient-2">
                        <i class="lni lni-users"> </i>
                      </div>
                      <h4 class="package-name mb-20">Standard</h4>
                      <h4 class="package-price mb-20">$0.0</h4>
                      {{-- <ul class="package-details">
                        <li>15 Cards</li>
                        <li>90GB Disk Space</li>
                        <li>70GB Monthly Bandwidth</li>
                        <li>20 Subdomains</li>
                        <li>25 Domains</li>
                        <li>Unlimited Support</li>
                      </ul> --}}
                      <a href="javascript:void(0)" class="btn-hover price-btn main-btn">Free Now</a>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-price text-center">
                      <div class="price-icon icon-style mx-auto gradient-3">
                        <i class="lni lni-diamond"> </i>
                      </div>
                      <h4 class="package-name mb-20">Premium</h4>
                      <h4 class="package-price mb-20">$0.0</h4>
                      {{-- <ul class="package-details">
                        <li>Unlimited Cards</li>
                        <li>100GB Disk Space</li>
                        <li>100GB Monthly Bandwidth</li>
                        <li>50 Subdomains</li>
                        <li>75 Domains</li>
                        <li>Unlimited Support</li>
                      </ul> --}}
                      <a href="javascript:void(0)" class="btn-hover price-btn main-btn">Free Now</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade price-tab" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-price text-center">
                      <div class="price-icon icon-style mx-auto gradient-1">
                        <i class="lni lni-user"> </i>
                      </div>
                      <h4 class="package-name mb-20">Personal</h4>
                      <h4 class="package-price mb-20">$0.0</h4>
                      {{-- <ul class="package-details">
                        <li>5 Cards</li>
                        <li>50GB Disk Space</li>
                        <li>50GB Monthly Bandwidth</li>
                        <li>10 Subdomains</li>
                        <li>15 Domains</li>
                        <li>Unlimited Support</li>
                      </ul> --}}
                      <a href="javascript:void(0)" class="btn-hover price-btn main-btn">Free Now</a>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-price text-center active">
                      <div class="price-icon icon-style mx-auto gradient-2">
                        <i class="lni lni-users"> </i>
                      </div>
                      <h4 class="package-name mb-20">Standard</h4>
                      <h4 class="package-price mb-20">$0.0</h4>
                      {{-- <ul class="package-details">
                        <li>15 Cards</li>
                        <li>90GB Disk Space</li>
                        <li>70GB Monthly Bandwidth</li>
                        <li>20 Subdomains</li>
                        <li>25 Domains</li>
                        <li>Unlimited Support</li>
                      </ul> --}}
                      <a href="javascript:void(0)" class="btn-hover price-btn main-btn">Free Now</a>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-price text-center">
                      <div class="price-icon icon-style mx-auto gradient-3">
                        <i class="lni lni-diamond"> </i>
                      </div>
                      <h4 class="package-name mb-20">Premium</h4>
                      <h4 class="package-price mb-20">$0.0</h4>
                      {{-- <ul class="package-details">
                        <li>Unlimited Cards</li>
                        <li>100GB Disk Space</li>
                        <li>100GB Monthly Bandwidth</li>
                        <li>50 Subdomains</li>
                        <li>75 Domains</li>
                        <li>Unlimited Support</li>
                      </ul> --}}
                      <a href="javascript:void(0)" class="btn-hover price-btn main-btn">Free Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact-area pt-130">
    <div class="container">
      <div class="row">
        <div class="col-xl-7 col-lg-10 mx-auto">
          <div class="section-title text-center">
            <h2 class="mb-60 wow fadeInUp" data-wow-delay=".2s">
              What Questions Do Our Customers Ask Most Often?
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-6 col-lg-6">
          <div class="faq-wrapper">
            <h3 class="mb-40 wow fadeInUp" data-wow-delay=".2s">
              Frequently Asked Questions
            </h3>
            <div class="faq-accordion accordion-style">
              <div class="accordion" id="accordionExample2">
                <div class="single-accordion mb-30 wow fadeInUp" data-wow-delay=".3s">
                  <div class="accordion-btn">
                    <button class="btn-block text-start collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                      <span>What is the Profile Crafting System?</span>
                    </button>
                  </div>
                  <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample2">
                    <div class="accordion-content">
                        The Profile Crafting System is a software tool that allows users to create professional profiles and portfolio websites without any coding skills. It also generates a professional CV that can be used for job applications and career development.

                    </div>
                  </div>
                </div>
                <div class="single-accordion mb-30 wow fadeInUp" data-wow-delay=".4s">
                  <div class="accordion-btn">
                    <button class="btn-block text-start collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                      <span> Do I need any coding knowledge to use this software?</span>
                    </button>
                  </div>
                  <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample2">
                    <div class="accordion-content">
                        No, the Profile Crafting System is designed to be user-friendly and does not require any coding knowledge. You can easily input your information, and the software will automatically generate a portfolio website and CV for you.

                    </div>
                  </div>
                </div>
                <div class="single-accordion mb-30 wow fadeInUp" data-wow-delay=".5s">
                  <div class="accordion-btn">
                    <button class="btn-block text-start collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                      <span>Can I share my portfolio with others?</span>
                    </button>
                  </div>
                  <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample2">
                    <div class="accordion-content">
                        Yes, after creating your portfolio, you will receive a unique URL that you can share with others to showcase your work and qualifications.
                    </div>
                  </div>
                </div>
                <div class="single-accordion mb-30 wow fadeInUp" data-wow-delay=".6s">
                  <div class="accordion-btn">
                    <button class="btn-block text-start collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                      <span>Is my data secure?</span>
                    </button>
                  </div>
                  <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample2">
                    <div class="accordion-content">
                        Absolutely. The Profile Crafting System uses secure data handling practices to ensure that your personal and professional information is kept safe.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="contact-form-wrapper">
            <h3 class="mb-40 wow fadeInUp" data-wow-delay=".3s">
              Do You Have Any Question?
            </h3>
            <form action="https://preview.uideck.com/items/appi/assets/contact.php" method="post"
              class="contact-form wow fadeInUp" data-wow-delay=".4s">
              <input type="text" placeholder="Name" name="name" id="name" required />
              <input type="email" placeholder="Email" name="email" id="email" required />
              <textarea name="message" id="message" rows="4" placeholder="Message" required></textarea>
              <button class="btn-hover btn-block main-btn" type="submit">
                Send Message
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer" class="footer-area bg_cover">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
            <a href="javascript:void(0)" class="mb-35 d-block footer-logo">
              <img src="assets/images/logo.svg" alt />
            </a>
            <p class="mb-35">
                The primary objective of the Profile Crafting System project is to create a simple and user-friendly platform that allows users to build their personal profiles and portfolio websites without any coding skills.
            </p>
            <ul class="social-links">
              <li>
                <a href="javascript:void(0)" class="facebook">
                  <i class="lni lni-facebook-filled"> </i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="twitter">
                  <i class="lni lni-twitter-filled"> </i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="instagram">
                  <i class="lni lni-instagram-filled"> </i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="linkedin">
                  <i class="lni lni-linkedin-original"> </i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6 col-sm-6">
          <div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="javascript:void(0)">Home</a></li>
              <li><a href="javascript:void(0)">Feature</a></li>
              <li><a href="javascript:void(0)">How it Work</a></li>
              <li><a href="javascript:void(0)">Screenshots</a></li>
              <li><a href="javascript:void(0)">Pricing</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
          <div class="footer-widget wow fadeInUp" data-wow-delay=".6s">
            <h4>Product Help</h4>
            <ul>
              <li><a href="javascript:void(0)">FAQs</a></li>
              <li><a href="javascript:void(0)">Privacy</a></li>
              <li><a href="javascript:void(0)">Policy</a></li>
              <li><a href="javascript:void(0)">Support</a></li>
              <li><a href="javascript:void(0)">Team</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="footer-widget wow fadeInUp" data-wow-delay=".8s">
            <h4>Subscribe Newsletter</h4>
            <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
              target="_blank" novalidate class="subscribe-form validate">
              <input type="email" name="EMAIL" id="EMAIL" class="required email" placeholder="Enter Mail Address" />
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display: none"></div>
                <div class="response" id="mce-success-response" style="display: none"></div>
              </div>

              <div style="position: absolute; left: -5000px" aria-hidden="true">
                <input type="text" name="b_4dbefd9d3a1d6a570020b1e85_e16d098ae8" tabindex="-1" value />
              </div>
              <button id="subscribe" class="btn-hover main-btn text-end" type="submit">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-cradit">
        <p class="text-center mb-0">
          Designed and Developed by
          <a href="https://github.com/shahariarr" rel="nofollow">Sharariar Rahman</a> & <a href="https://github.com/ariful305" rel="nofollow">Md Ariful Islam </a>

        </p>
      </div>
    </div>
  </footer>


  <a href="#" class="back-to-top btn-hover">
    <i class="lni lni-chevron-up"> </i>
  </a>


  <script src="{{ asset('landing_page/assets/js/bootstrap.bundle.min.js') }}"></script>

  <script src={{ asset('landing_page/assets/js/tiny-slider.js') }}"></script>

  <script src="{{ asset('landing_page/assets/js/swiper.min.js') }}"></script>

  <script src="{{ asset('landing_page/assets/js/glightbox.min.js') }}"></script>

  <script src="{{ asset('landing_page/assets/js/wow.min.js') }}"></script>

  <script src="{{ asset('landing_page/assets/js/count-up.min.js') }}"></script>

  <script src="{{ asset('landing_page/assets/js/main.js') }}"></script>
  <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'8b0dcc742bd8a129',t:'MTcyMzI2OTk3My4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/769ce3c24a3b/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"rayId":"8b0dcc742bd8a129","version":"2024.7.0","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"9a6015d415bb4773a0bff22543062d3b","b":1}'
    crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.uideck.com/items/appi/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Aug 2024 06:06:34 GMT -->

</html>
