@php
    $contactData = App\Models\ContactData::where('user_id', auth()->id())->first();
    $profile = App\Models\Profile::where('user_id', auth()->id())->first();
    $summary = App\Models\ProfessionalSummary::where('user_id', auth()->id())->first();

@endphp
<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About</h2>
                    <p>{{ Str::limit($summary->about_me ?? 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 100) }}</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        @if($contactData && $contactData->linkedin)
                            <li class="ftco-animate"><a href="{{ $contactData->linkedin }}" target="_blank"><span class="icon-linkedin"></span></a></li>
                        @endif
                        @if($contactData && $contactData->facebook)
                            <li class="ftco-animate"><a href="{{ $contactData->facebook }}" target="_blank"><span class="icon-facebook"></span></a></li>
                        @endif
                        @if($contactData && $contactData->github)
                            <li class="ftco-animate"><a href="{{ $contactData->github }}" target="_blank"><span class="icon-github"></span></a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Social media</h2>
                    <ul class="list-unstyled">
                        <li><a href="https://www.facebook.com/shaharier.all"><span class="icon-long-arrow-right mr-2"></span>Facebook</a></li>
                        <li><a href="https://www.linkedin.com/in/shahariar-shifat-6616a122b/"><span class="icon-long-arrow-right mr-2"></span>linkedin</a></li>
                        <li><a href="https://github.com/shahariarr"><span class="icon-long-arrow-right mr-2"></span>Github</a></li>
                        <li><a href="https://twitter.com/login"><span class="icon-long-arrow-right mr-2"></span>Twitter</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">{{ $contactData->address ?? 'Null' }}</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{ $contactData->phone ?? 'Null' }}</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $contactData->email ?? 'Null' }}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Developer portfolio by <a href="https://github.com/shahariarr" target="_blank">Shahariar Rahamna</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
