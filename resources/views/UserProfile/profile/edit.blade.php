@extends('layouts.master-user')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Edit Personal Information</h4>

                    <!-- Display success and error messages -->
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Form fields -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $profile->first_name ?? '') }}" placeholder="John">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $profile->last_name ?? '') }}" placeholder="Doe">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age" name="age" value="{{ old('age', $profile->age ?? '') }}" placeholder="30">
                        </div>
                        <div class="form-group">
                            <label for="nationality">Nationality</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" value="{{ old('nationality', $profile->nationality ?? '') }}" placeholder="American">
                        </div>
                        <div class="form-group">
                            <label for="freelance">Freelance</label>
                            <select class="form-control" id="freelance" name="freelance">
                                <option value="1" {{ old('freelance', $profile->freelance ?? '') == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('freelance', $profile->freelance ?? '') == 0 ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="languages">Languages</label>
                            <input type="text" class="form-control" id="languages" name="languages" value="{{ old('languages', $profile->languages ?? '') }}" placeholder="English, Spanish">
                        </div>

                        <!-- New fields added -->
                        <div class="form-group">
                            <label for="role">Role</label>
                            <input type="text" class="form-control" id="role" name="role" value="{{ old('role', $profile->role ?? '') }}" placeholder="e.g., Developer">
                        </div>
                        <div class="form-group">
                            <label for="birth">Date of Birth</label>
                            <input type="date" class="form-control" id="birth" name="birth" value="{{ old('birth', $profile->birth ?? '') }}">
                        </div>

                        <!-- File Upload Field -->
                        <div class="mb-3 custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        @if($profile->image)
                        <div class="mb-3">
                            <img src="{{ asset('profile_images/' . $profile->image) }}" alt="Current Image" class="img-fluid mt-2" style="max-width: 150px;">
                        </div>
                        @endif

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary btn-block">Update Information</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom styles -->
<style>
    .form-label {
        font-weight: bold;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .form-control-file {
        border: 1px solid #ced4da;
        border-radius: .25rem;
    }
    .img-fluid {
        border-radius: .25rem;
        border: 1px solid #ddd;
    }
</style>
@endsection
