@php
    $profile = App\Models\Profile::where('user_id', auth()->id())->first();
    $user = auth()->user();
@endphp
<section class="ftco-section ftco-no-pb" id="resume-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h1 class="big big-2">Experience</h1>
                <h2 class="mb-4">Experience</h2>
                <p>Below is a summary of my professional experience, showcasing the roles and responsibilities I have undertaken throughout my career.</p>
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
                <p><a href="{{ route('CV', [$user->unique_id]) }}" class="btn btn-primary py-4 px-5" target="_blank">Download CV</a></p>
            </div>
        </div>
    </div>
</section>
