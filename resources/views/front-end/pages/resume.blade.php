@extends('front-end.layouts.master_layout')
@section('content')
<article class="resume {{Request::is('resume') ? 'active' : ''}}" data-page="resume">

    <header>
      <h2 class="h2 article-title">Resume</h2>
    </header>

    <section class="timeline">

      <div class="title-wrapper">
        <div class="icon-box">
          <ion-icon name="book-outline"></ion-icon>
        </div>

        <h3 class="h3">Education</h3>
      </div>

      <ol class="timeline-list">

        <li class="timeline-item">

          <h4 class="h4 timeline-item-title">Iqra University</h4>

          <span>2020 — 2024 (present)</span>

          <p class="timeline-text">
            Recently studying bachelors of computer science
            from Iqra University
          </p>

        </li>

        <li class="timeline-item">

          <h4 class="h4 timeline-item-title">Coursera</h4>

          <span>June 2022-2023 january </span>

          <p class="timeline-text">
            Expertise in Learnings of Database like SQL, MongoDB from cousera
            Currently Enrolled in Learning of React Js course from coursera (present)
          </p>

        </li>

        <li class="timeline-item">

          <h4 class="h4 timeline-item-title">Udemy</h4>

          <span>March 2021 — 2021 November</span>

          <p class="timeline-text">
            Completed Front-End Development course from Udemy, have some expertise skills in
            Html, CSS, JavaScript.
            Complete Wordpress course from Udemy.
          </p>

        </li>

      </ol>

    </section>

    <section class="timeline">

      <div class="title-wrapper">
        <div class="icon-box">
          <ion-icon name="book-outline"></ion-icon>
        </div>

        <h3 class="h3">Experience</h3>
      </div>

      <ol class="timeline-list">

        <li class="timeline-item">

          <h4 class="h4 timeline-item-title">UpWork</h4>

          <span>2022 — Present</span>

          <p class="timeline-text">
           Digital Freelancer at UpWork
           Team Leader at UpWork
           Project Manager at UpWork
           Front-End Developer at UpWork
           Graphic Designer at UpWork
          </p>

        </li>

        <li class="timeline-item">

          <h4 class="h4 timeline-item-title">Ibex Pakistan</h4>

          <span>July 2020 — 2020 October</span>

          <p class="timeline-text">
            Worked as a Commission Sales Associate at Ibex Tower
          </p>

        </li>

        <li class="timeline-item">

          <h4 class="h4 timeline-item-title">Creative Minds Animation</h4>

          <span>January 2023 — present</span>

          <p class="timeline-text">
            Project manager and Graphic Designer at Software House(Creative Minds Animation).
          </p>

        </li>

      </ol>

    </section>

    <section class="skill">

      <h3 class="h3 skills-title">My skills</h3>

      <ul class="skills-list content-card">

        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5">Web design</h5>
            <data value="80">80%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 80%;"></div>
          </div>

        </li>

        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5">Graphic design</h5>
            <data value="70">70%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 70%;"></div>
          </div>

        </li>

        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5">Branding</h5>
            <data value="90">90%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 90%;"></div>
          </div>

        </li>

        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5">WordPress</h5>
            <data value="50">50%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 50%;"></div>
          </div>

        </li>

      </ul>

    </section>

  </article>
  @endsection
