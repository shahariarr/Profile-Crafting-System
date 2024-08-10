@extends('layouts.master-user')
@section('title', 'Personal-Information')

@section('content')
<div class="container-fluid add-form-list">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Edit Personal Information</h4>
                    </div>
                </div>
                <div class="card-body">
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

                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" data-toggle="validator">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">First Name *</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $profile->first_name ?? '') }}" placeholder="John" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name *</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $profile->last_name ?? '') }}" placeholder="Doe" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="age">Age *</label>
                                    <input type="number" class="form-control" id="age" name="age" value="{{ old('age', $profile->age ?? '') }}" placeholder="30" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nationality">Nationality *</label>
                                    <input type="text" class="form-control" id="nationality" name="nationality" value="{{ old('nationality', $profile->nationality ?? '') }}" placeholder="American" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="freelance">Freelance *</label>
                                    <select class="selectpicker form-control" id="freelance" name="freelance" data-style="py-0" required>
                                        <option value="1" {{ old('freelance', $profile->freelance ?? '') == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('freelance', $profile->freelance ?? '') == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="languages">Languages *</label>
                                    <input type="text" class="form-control" id="languages" name="languages" value="{{ old('languages', $profile->languages ?? '') }}" placeholder="English, Spanish" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <input type="text" class="form-control" id="role" name="role" value="{{ old('role', $profile->role ?? '') }}" placeholder="e.g., Developer">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="birth">Date of Birth</label>
                                    <input type="date" class="form-control" id="birth" name="birth" value="{{ old('birth', $profile->birth ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                            <div class="mb-3 custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                                @if($profile->image)
                                    <div class="form-group">
                                        <img src="{{ asset('profile_images/' . $profile->image) }}" alt="Current Image" class="img-fluid mt-2" style="max-width: 150px;">
                                    </div>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Update Information</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
