@extends('CV.main')
@section('title', 'CV')
@section('content')


        <div class="container px-3 px-lg-5" id="cv-content">
            <article class="resume-wrapper mx-auto theme-bg-light p-5 mb-5 my-5 shadow-lg" >

                <div class="resume-header">
                    <div class="row align-items-center">
                        <div class="resume-title col-12 col-md-6 col-lg-8 col-xl-9">
                            <h2 class="resume-name mb-0 text-uppercase">{{ $profile->first_name ?? 'Empty' }} {{ $profile->last_name ?? 'Value' }}</h2>
                            <div class="resume-tagline mb-3 mb-md-0">{{ $profile->role ?? 'Null' }}</div>
                        </div><!--//resume-title-->

                        <div class="resume-contact col-12 col-md-6 col-lg-4 col-xl-3">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-phone-square fa-fw fa-lg me-2 "></i><a
                                        class="resume-link" href="tel:#">{{ $contactData->phone ?? 'Null' }}</a></li>
                                <li class="mb-2"><i class="fas fa-envelope-square fa-fw fa-lg me-2"></i><a
                                        class="resume-link" href="mailto:#">{{ $contactData->email ?? 'Null' }}</a></li>
                                {{-- <li class="mb-2"><i class="fas fa-globe fa-fw fa-lg me-2"></i><a class="resume-link"
                                        href="#">www.yourwebsite.com</a></li> --}}
                                <li class="mb-0"><i class="fas fa-map-marker-alt fa-fw fa-lg me-2"></i>{{ $contactData->address ?? 'Null' }}</li>
                            </ul>
                        </div><!--//resume-contact-->
                    </div><!--//row-->

                </div><!--//resume-header-->
                <hr>
                <div class="resume-intro py-3">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-3 col-xl-2 text-center">
                            <img class="resume-profile-image mb-3 mb-md-0 me-md-5  ms-md-0 rounded mx-auto"
                                src="{{ $profile ? asset('profile_images/' . $profile->image) : asset('front-end/xxx/Doraemon.jpeg') }}" alt="image">
                        </div>

                        <div class="col text-start">
                            <p class="mb-0">{{ $summary->about_me  ?? 'A small river named Duden flows by their place and supplies it with the necessary regelialia.' }} </p>
                        </div><!--//col-->
                    </div>
                </div><!--//resume-intro-->
                <hr>
                <div class="resume-body">
                    <div class="row">
                        <div class="resume-main col-12 col-lg-8 col-xl-9   pe-0   pe-lg-5">
                            <section class="work-section py-3">
                                <h3 class="text-uppercase resume-section-heading mb-4">Work Experiences</h3>
                                @foreach($experiences as $experience)
                                    <div class="item mb-3">
                                        <div class="item-heading row align-items-center mb-2">
                                            <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">{{ $experience->title }}</h4>
                                            <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-start text-md-end">
                                                {{ $experience->duration }}
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <p>{{ $experience->company }}</p>
                                        </div>
                                    </div><!--//item-->
                                @endforeach
                            </section><!--//work-section-->

                               <!--//work-section-->


                               <section class="project-section py-3">
                                <h3 class="text-uppercase resume-section-heading mb-4">Projects</h3>
                                @foreach($projects as $project)
                                    <div class="item mb-3">
                                        <div class="item-heading row align-items-center mb-2">
                                            <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">{{ $project->name }}</h4>
                                            <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-start text-md-end">
                                                <a href="{{ $project->source_code }}" target="_blank">Open Source Code</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <p>{{ $project->description }}</p>
                                            <ul class="resume-list">
                                                <li><strong>Tools:</strong> {{ $project->tools }}</li>
                                                <li><strong>Role:</strong> {{ $project->role }}</li>
                                                <li><strong>Demo:</strong> <a href="{{ $project->demo }}" target="_blank">{{ $project->demo }}</a></li>
                                            </ul>
                                        </div>
                                    </div><!--//item-->
                                @endforeach
                            </section><!--//project-section-->

                        </div><!--//resume-main-->
                        <aside class="resume-aside col-12 col-lg-4 col-xl-3 px-lg-4 pb-lg-4">
                            <section class="skills-section py-3">
                                <h3 class="text-uppercase resume-section-heading mb-4">Skills</h3>
                                <div class="item">
                                    <h4 class="item-title">Technical</h4>
                                    <ul class="list-unstyled resume-skills-list">
                                        @foreach($skills as $skill)
                                            <li class="mb-2">{{ $skill->name }}</li>
                                        @endforeach
                                    </ul>
                                </div><!--//item-->
                            </section><!--//skills-section-->

                            <section class="education-section py-3">
                                <h3 class="text-uppercase resume-section-heading mb-4">Education</h3>
                                <ul class="list-unstyled resume-education-list">
                                    @foreach($educations as $education)
                                        <li class="mb-3">
                                            <div class="resume-degree font-weight-bold">{{ $education->title }}</div>
                                            <div class="resume-degree-org text-muted">{{ $education->institution }}</div>
                                            <div class="resume-degree-time text-muted">{{ $education->duration }}</div>
                                        </li>
                                    @endforeach
                                </ul>
                            </section><!--//education-section-->


                            <section class="skills-section py-3">
                                <h3 class="text-uppercase resume-section-heading mb-4">Languages</h3>
                                <ul class="list-unstyled resume-lang-list">
                                    <li class="mb-2">{{ $profile->languages ?? 'Null' }}</li>

                                </ul>
                            </section><!--//certificates-section-->
                            {{-- <section class="skills-section py-3">
                                <h3 class="text-uppercase resume-section-heading mb-4">Reference</h3>
                                <ul class="list-unstyled resume-interests-list mb-0">
                                    <li class="mb-2">Name</li>
                                    <li class="mb-2">Role</li>
                                    <li class="mb-2">Company</li>
                                    <li>Travelling</li>
                                </ul>
                            </section><!--//certificates-section--> --}}

                        </aside><!--//resume-aside-->
                    </div><!--//row-->
                </div><!--//resume-body-->
                <hr>
                <div class="resume-footer text-center">
                    <ul class="resume-social-list list-inline mx-auto mb-0 d-inline-block text-muted">
                        @if($contactData && $contactData->github)
                            <li class="list-inline-item mb-lg-0 me-3">
                                <a class="resume-link" href="{{ $contactData->github }}" target="_blank">
                                    <i class="fab fa-github-square fa-2x me-2" data-fa-transform="down-4"></i>
                                    <span class="d-none d-lg-inline-block text-muted">{{ parse_url($contactData->github, PHP_URL_HOST) }}</span>
                                </a>
                            </li>
                        @endif
                        @if($contactData && $contactData->linkedin)
                            <li class="list-inline-item mb-lg-0 me-3">
                                <a class="resume-link" href="{{ $contactData->linkedin }}" target="_blank">
                                    <i class="fab fa-linkedin fa-2x me-2" data-fa-transform="down-4"></i>
                                    <span class="d-none d-lg-inline-block text-muted">{{ parse_url($contactData->linkedin, PHP_URL_HOST) }}</span>
                                </a>
                            </li>
                        @endif
                        @if($contactData && $contactData->facebook)
                            <li class="list-inline-item mb-lg-0 me-lg-3">
                                <a class="resume-link" href="{{ $contactData->facebook }}" target="_blank">
                                    <i class="fab fa-twitter-square fa-2x me-2" data-fa-transform="down-4"></i>
                                    <span class="d-none d-lg-inline-block text-muted">{{ '@' . parse_url($contactData->facebook, PHP_URL_PATH) }}</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div><!--//resume-footer-->

            </article>

        </div><!--//container-->

@endsection
