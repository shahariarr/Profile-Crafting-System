<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third js-fullheight order-md-last img-container">
                        @if($profile)
                            <div class="img profile-image" style="background-image:url({{ asset('profile_images/' . $profile->image) }});">
                                <div class="overlay"></div>
                            </div>
                        @else
                            <div class="img profile-image" style="background-image:url({{ asset('front-end/xxx/Doraemon.jpeg') }});">
                                <div class="overlay"></div>
                            </div>
                        @endif
                    </div>
                    <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax="properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">Hello!</span>
                            <h1 class="mb-4 mt-3">I'm <span>{{ $profile->first_name ?? 'Empty' }} {{ $profile->last_name ?? 'Value' }}</span></h1>
                            <h2 class="mb-4">A {{ $profile->role ?? 'No Role Available' }}</h2>
                            <p><a href="#about-section" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third js-fullheight order-md-last img-container">
                        @if($profile)
                            <div class="img profile-image" style="background-image:url({{ asset('profile_images/' . $profile->image) }});">
                                <div class="overlay"></div>
                            </div>
                        @else
                            <div class="img profile-image" style="background-image:url({{ asset('front-end/xxx/Doraemon.jpeg') }});">
                                <div class="overlay"></div>
                            </div>
                        @endif
                    </div>
                    <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax="properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">Hello!</span>
                            <h1 class="mb-4 mt-3">I'm a <span>{{ $profile->role ?? 'No Role Available' }}</span> based in {{ $profile->nationality ?? 'NULL' }}</h1>
                            <p><a href="#about-section" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .img-container {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        width: 100%;
    }

    .profile-image {
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        height: 100%;
        width: 100%;
        max-height: 400px; /* Adjust as needed */
        max-width: 400px; /* Adjust as needed */
        margin: auto; /* Center the image within the container */
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .profile-image {
            max-height: 300px; /* Adjust as needed */
            max-width: 300px; /* Adjust as needed */
        }
    }

    @media (max-width: 992px) {
        .profile-image {
            max-height: 250px; /* Adjust as needed */
            max-width: 250px; /* Adjust as needed */
        }
    }

    @media (max-width: 768px) {
        .profile-image {
            max-height: 200px; /* Adjust as needed */
            max-width: 200px; /* Adjust as needed */
        }
        .one-third, .one-forth {
            width: 100%;
            text-align: center;
        }
        .img-container {
            justify-content: center;
        }
    }

    @media (max-width: 576px) {
        .profile-image {
            max-height: 150px; /* Adjust as needed */
            max-width: 150px; /* Adjust as needed */
        }
    }
</style>
