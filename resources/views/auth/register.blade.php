@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(to right, #7e38c9 0%, #e5e7ec1a 100%);
        font-family: 'Nunito', sans-serif;
    }
    .auth-card {
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .floating-label.form-group {
        position: relative;
    }
    .floating-input {
        border: 1px solid #ccc;
        border-radius: 25px;
        padding: 10px 15px;
        width: 100%;
    }
    .floating-label label {
        position: absolute;
        top: 10px;
        left: 15px;
        background: #ffffff;
        padding: 0 5px;
        transition: all 0.2s;
        color: #999;
    }
    .floating-input:focus + label,
    .floating-input:not(:placeholder-shown) + label {
        top: -10px;
        font-size: 12px;
        color: #007bff;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 25px;
        padding: 10px 30px;
        color: #ffffff;
        font-size: 16px;
        transition: background-color 0.2s;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .form-control.is-invalid, .was-validated .form-control:invalid {
        border-color: #dc3545;
    }
    .invalid-feedback {
        display: block;
    }
</style>
<div class="container py-5">
    <div class="row align-items-center justify-content-center height-self-center">
        <div class="col-lg-8">
            <div class="card auth-card">
                <div class="card-body p-0">
                    <div class="d-flex align-items-center auth-content">
                        <div class="col-lg-7 align-self-center">
                            <div class="p-3">
                                <h2 class="mb-2">{{ __('Register') }}</h2>
                                <p>Create your POSDash account.</p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                                {{-- <label>{{ __('Name') }}</label> --}}
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                                                {{-- <label>{{ __('Email Address') }}</label> --}}
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                                                {{-- <label>{{ __('Password') }}</label> --}}
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                                {{-- <label>{{ __('Confirm Password') }}</label> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                    <p class="mt-3">
                                        Already have an Account <a href="{{ route('login') }}" class="text-primary">Sign In</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 content-right">
                            <img src="../assets/images/login/01.png" class="img-fluid image-right" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
