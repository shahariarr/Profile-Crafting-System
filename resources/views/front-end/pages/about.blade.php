@extends('front-end.layouts.master_layout')
@section('content')
<article class="about {{Request::is('about') ? 'active' : ''}}" data-page="about">

    <header>
      <h2 class="h2 article-title">About me</h2>
    </header>

    <section class="about-text">
      <p>
        I'm basically into Front-end Devolopment, Expertise as a UI/UX Designer, working in web development.
        I enjoy
        turning complex problems into simple, beautiful and intuitive designs.
      </p>

      <p>
        My job is to build your website so that it is functional and user-friendly but at the same time attractive.
        Moreover, I
        add personal touch to your product and make sure that is eye-catching and easy to use. My aim is to bring
        across your
        message and identity in the most creative way. I created web design for many famous brand companies.
      </p>
    </section>


    <!--
      - service
    -->

    <section class="service">

      <h3 class="h3 service-title">What i'm doing</h3>

      <ul class="service-list">

        <li class="service-item">

          <div class="service-icon-box">
            <img src="{{asset('front-end/assets/images/icon-design.svg')}}" alt="design icon" width="40">
          </div>

          <div class="service-content-box">
            <h4 class="h4 service-item-title">Web design</h4>

            <p class="service-item-text">
              The most modern and high-quality design made at a professional level.
            </p>
          </div>

        </li>

        <li class="service-item">

          <div class="service-icon-box">
            <img src="{{asset('front-end/assets/images/icon-dev.svg')}}" alt="Web development icon" width="40">
          </div>

          <div class="service-content-box">
            <h4 class="h4 service-item-title">Web development</h4>

            <p class="service-item-text">
              High-quality development of sites at the professional level.
            </p>
          </div>

        </li>

        <li class="service-item">

          <div class="service-icon-box">
            <img src="{{asset('front-end/assets/images/icon-app.svg')}}" alt="mobile app icon" width="40">
          </div>

          <div class="service-content-box">
            <h4 class="h4 service-item-title">Mobile apps</h4>

            <p class="service-item-text">
              Professional development of applications for iOS and Android.
            </p>
          </div>

        </li>

        <li class="service-item">

          <div class="service-icon-box">
            <img src="{{asset('front-end/assets/images/icon-photo.svg')}}" alt="camera icon" width="40">
          </div>

          <div class="service-content-box">
            <h4 class="h4 service-item-title">Graphic Designer</h4>

            <p class="service-item-text">
              I make high-quality graphics of any category at a professional level, I also work at upwork as freelancer Grapic designer.
            </p>
          </div>

        </li>

      </ul>

    </section>


    <!--
      - testimonials
    -->









  </article>
  @endsection
