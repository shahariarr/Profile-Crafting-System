@php
    $profile = App\Models\Profile::where('user_id', auth()->id())->first();
    $user = auth()->user();
@endphp
@extends('layouts.master-user')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid py-4" style="font-family: 'Open Sans', sans-serif;">
        <div class="row">
            <!-- Welcome Card -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-lg">
                    <div class="card-body">
                        <h3 class="card-title">Hi, {{ Auth::user()->name }}</h3>
                        <p>Your dashboard gives you views of my information.</p>
                    </div>
                </div>
            </div>

            <!-- Quick Stats Card -->
            <div class="col-lg-8 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Share your profile</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="mb-1">Want to Show your Profile? Just click the "Profile website" button over here.</p>

                        <a href="{{ route('share', [$user->unique_id]) }}" id="shareButton" class="btn btn-primary mt-2">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.5 3a3.5 3.5 0 0 0-3.456 4.06L8.143 9.704a3.5 3.5 0 1 0-.01 4.6l5.91 2.65a3.5 3.5 0 1 0 .863-1.805l-5.94-2.662a3.53 3.53 0 0 0 .002-.961l5.948-2.667A3.5 3.5 0 1 0 17.5 3Z"/>
                            </svg>
                            Share your portfolio
                        </a>

                        <div id="copyUrlContainer" style="display: none;">
                            <p class="mt-2">Copy your profile URL : Don't forget to share your portfolio with your friends.</p>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="profileUrl" value="{{ route('share', [$user->unique_id]) }}" readonly>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="copyButton">Copy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities Card -->
        </div>

        <div class="row">
            <!-- Profile Overview Card -->
            <div class="col-lg-8 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Download Your CV</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="mb-1">Want to download your CV? Just click the "Download CV" button over here.</p>
                        <p>
                            <a href="{{ route('CV', [$user->unique_id]) }}" class="btn btn-primary mt-2" target="_blank">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4"/>
                                </svg>
                                Download CV
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.getElementById('shareButton').addEventListener('click', function(event) {
        event.preventDefault();
        // Display the copy URL container
        document.getElementById('copyUrlContainer').style.display = 'block';
    });

    document.getElementById('copyButton').addEventListener('click', function() {
        // Copy the URL to clipboard
        var copyText = document.getElementById('profileUrl');
        copyText.select();
        document.execCommand('copy');

        // Change button text to indicate the URL has been copied
        var copyButton = document.getElementById('copyButton');
        copyButton.innerText = 'Copied!';

        // Reset button text after 2 seconds
        setTimeout(function() {
            copyButton.innerText = 'Copy';
        }, 2000);
    });
</script>
@endpush
