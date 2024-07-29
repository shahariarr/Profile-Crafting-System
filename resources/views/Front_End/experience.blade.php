@php
    $experiences = App\Models\Experience::where('user_id', Auth::id())->get();
@endphp

<section class="ftco-section ftco-no-pb" id="resume-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h1 class="big big-2">Experience</h1>
                <h2 class="mb-4">Experience</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($experiences as $experience)
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">{{ $experience->duration }}</span>
                        <h2>{{ $experience->title }}</h2>
                        <span class="position">{{ $experience->company }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center ftco-animate">
                <p><a href="#" class="btn btn-primary py-4 px-5">Download CV</a></p>
            </div>
        </div>
    </div>
</section>
