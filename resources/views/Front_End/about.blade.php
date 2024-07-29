@php
    $contactData = App\Models\ContactData::where('user_id', auth()->id())->first();
    $profile = App\Models\Profile::where('user_id', auth()->id())->first();
    $summary = App\Models\ProfessionalSummary::where('user_id', auth()->id())->first();
@endphp

<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{ asset('profile_images/' . $profile->image) }});">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h1 class="big">About</h1>
                        <h2 class="mb-4">About Me</h2>
                        <p>{{  $summary->about_me?? 'A small river named Duden flows by their place and supplies it with the necessary regelialia.' }}</p>
                        <ul class="about-info mt-4 px-md-0 px-2">
                            <li class="d-flex"><span>Name:</span> <span>{{ $profile->first_name ?? 'Empty ' }} {{ $profile->last_name ?? 'Value' }}</span></li>
                            <li class="d-flex"><span>Date of birth:</span> <span>{{ $profile->birth ?? 'Null' }}</span></li>
                            <li class="d-flex"><span>Role:</span> <span>{{ $profile->role ?? 'Null' }}</span></li>
                            <li class="d-flex"><span>Nationality:</span> <span>{{ $profile->nationality ?? 'Null' }}</span></li>
                            <li class="d-flex"><span>Address:</span> <span>{{ $contactData->address ?? 'Null' }}</span></li>
                            <li class="d-flex"><span>Languages:</span> <span>{{ $profile->languages ?? 'Null' }}</span></li>
                            <li class="d-flex"><span>Email:</span> <span>{{ $contactData->email ?? 'Null' }}</span></li>
                            <li class="d-flex"><span>Phone:</span> <span>{{ $contactData->phone ?? 'Null' }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="counter-wrap ftco-animate d-flex mt-md-3">
                    <div class="text">
                        <p class="mb-4">
                            <span class="number" data-number="120">0</span>
                            <span>Project complete</span>
                        </p>
                        <p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
