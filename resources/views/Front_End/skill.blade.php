{{-- @php
    $skills = App\Models\Skill::where('user_id', Auth::id())->get();
@endphp --}}

<section class="ftco-section" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Skills</h1>
                <h2 class="mb-4">My Skills</h2>
                <p>Below is an overview of my skills, highlighting both technical and soft abilities that contribute to my professional expertise.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($skills as $skill)
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <span class="icon">
                            <i class="{{ $skill->icon }}"></i> <!-- Use the icon class from the skill model -->
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">{{ $skill->name }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
