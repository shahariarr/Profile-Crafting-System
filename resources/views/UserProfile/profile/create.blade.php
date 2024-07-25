@extends('layouts.master-user')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Create Personal Information</h4>
                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Add form fields here (same as in edit.blade.php) -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="John" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" placeholder="Doe" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}" placeholder="30" required>
                        </div>
                        <div class="form-group">
                            <label for="nationality">Nationality</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" value="{{ old('nationality') }}" placeholder="American" required>
                        </div>
                        <div class="form-group">
                            <label for="freelance">Freelance</label>
                            <select class="form-control" id="freelance" name="freelance" required>
                                <option value="1" {{ old('freelance') == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('freelance') == 0 ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="languages">Languages</label>
                            <input type="text" class="form-control" id="languages" name="languages" value="{{ old('languages') }}" placeholder="English, Spanish" required>
                        </div>
                        <div class="mb-3 custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image" >
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
