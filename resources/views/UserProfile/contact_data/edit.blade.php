@extends('layouts.master-user')

@section('content')
<div class="container-fluid add-form-list mt-5">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title text-center mb-4">Edit Contact Data</h4>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Display error message -->
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Display success message -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact-data.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $contactData->title) }}" placeholder="Your professional title" required>
                        </div>
                        <div class="form-group">
                            <label for="about">About</label>
                            <textarea class="form-control" id="about" name="about" rows="4" placeholder="A brief about yourself" required>{{ old('about', $contactData->about) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $contactData->phone) }}" placeholder="Your phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contactData->email) }}" placeholder="Your email address" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $contactData->address) }}" placeholder="Your physical address" required>
                        </div>
                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ old('linkedin', $contactData->linkedin) }}" placeholder="Your LinkedIn profile URL" required>
                        </div>
                        <div class="form-group">
                            <label for="github">GitHub</label>
                            <input type="text" class="form-control" id="github" name="github" value="{{ old('github', $contactData->github) }}" placeholder="Your GitHub profile URL" required>
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $contactData->facebook) }}" placeholder="Your Facebook profile URL" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
