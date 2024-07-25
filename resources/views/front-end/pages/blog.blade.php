@extends('front-end.layouts.master_layout')
@section('content')
<article class="blog {{Request::is('blog') ? 'active' : ''}}" data-page="blog">

    <header>
      <h2 class="h2 article-title">Blog</h2>
    </header>

    <section class="blog-posts">

      <ul class="blog-posts-list">

        <li class="blog-post-item">
          <a href="#">

            <figure class="blog-banner-box">
              <img src="{{asset('front-end/assets/images/blog-1.jpg')}}" alt="Design conferences in 2022" loading="lazy">
            </figure>

            <div class="blog-content">

              <div class="blog-meta">
                <p class="blog-category">Design</p>

                <span class="dot"></span>

                <time datetime="2022-02-23">Fab 23, 2022</time>
              </div>

              <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

              <p class="blog-text">
                The truth and almost like an architect, the sayings of a blessed life, I will explain.
              </p>

            </div>

          </a>
        </li>

        <li class="blog-post-item">
          <a href="#">

            <figure class="blog-banner-box">
              <img src="{{asset('front-end/assets/images/blog-2.jpg')}}" alt="Best fonts every designer" loading="lazy">
            </figure>

            <div class="blog-content">

              <div class="blog-meta">
                <p class="blog-category">Design</p>

                <span class="dot"></span>

                <time datetime="2022-02-23">Fab 23, 2022</time>
              </div>

              <h3 class="h3 blog-item-title">Best fonts every designer</h3>

              <p class="blog-text">
                But as a result of perspicuous understanding, with free time, when the choice is ours, it is to be chosen.
              </p>

            </div>

          </a>
        </li>

        <li class="blog-post-item">
          <a href="#">

            <figure class="blog-banner-box">
              <img src="{{asset('front-end/assets/images/blog-3.jpg')}}" alt="Design digest #80" loading="lazy">
            </figure>

            <div class="blog-content">

              <div class="blog-meta">
                <p class="blog-category">Design</p>

                <span class="dot"></span>

                <time datetime="2022-02-23">Fab 23, 2022</time>
              </div>

              <h3 class="h3 blog-item-title">Design digest #80</h3>

              <p class="blog-text">
                Design is the silent ambassador of your brand, speaking volumes through visuals and user experience.
              </p>

            </div>

          </a>
        </li>

        <li class="blog-post-item">
          <a href="#">

            <figure class="blog-banner-box">
              <img src="{{asset('front-end/assets/images/blog-4.jpg')}}" alt="UI interactions of the week" loading="lazy">
            </figure>

            <div class="blog-content">

              <div class="blog-meta">
                <p class="blog-category">Design</p>

                <span class="dot"></span>

                <time datetime="2022-02-23">Fab 23, 2022</time>
              </div>

              <h3 class="h3 blog-item-title">UI interactions of the week</h3>

              <p class="blog-text">
                A well-designed website is a harmonious blend of aesthetics, functionality, and seamless navigation.
              </p>

            </div>

          </a>
        </li>

        <li class="blog-post-item">
          <a href="#">

            <figure class="blog-banner-box">
              <img src="{{asset('front-end/assets/images/blog-5.jpg')}}" alt="The forgotten art of spacing" loading="lazy">
            </figure>

            <div class="blog-content">

              <div class="blog-meta">
                <p class="blog-category">Design</p>

                <span class="dot"></span>

                <time datetime="2022-02-23">Fab 23, 2022</time>
              </div>

              <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

              <p class="blog-text">
                To the greatest extent pleasing, but toil and pain, we obtain any outcome through diligent work and perseverance.
              </p>

            </div>

          </a>
        </li>

        <li class="blog-post-item">
          <a href="#">

            <figure class="blog-banner-box">
              <img src="{{asset('front-end/assets/images/blog-6.jpg')}}" alt="Design digest #79" loading="lazy">
            </figure>

            <div class="blog-content">

              <div class="blog-meta">
                <p class="blog-category">Design</p>

                <span class="dot"></span>

                <time datetime="2022-02-23">Fab 23, 2022</time>
              </div>

              <h3 class="h3 blog-item-title">Design digest #79</h3>

              <p class="blog-text">
                Optionally, nothing hinders or prevents the most pleasing choice, as one desires to be a light.
              </p>

            </div>

          </a>
        </li>

      </ul>

    </section>

  </article>
@endsection

