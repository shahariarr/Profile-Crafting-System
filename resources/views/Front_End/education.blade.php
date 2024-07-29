@php
    $educations = App\Models\Education::where('user_id', Auth::id())->get();
@endphp

<section class="ftco-section ftco-no-pb" id="resume-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h1 class="big big-2">Education</h1>
                <h2 class="mb-4">Education</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($educations as $education)
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">{{ $education->duration }}</span>
                        <h2>{{ $education->title }}</h2>
                        <span class="position">{{ $education->institution }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
