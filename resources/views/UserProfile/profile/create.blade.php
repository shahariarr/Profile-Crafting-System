@extends('layouts.master-user')

@section('content')
<div class="container-fluid add-form-list">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title text-center mb-4">Create Personal Information</h4>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group text-center">
                            <div class="image-upload">
                                <label for="image">
                                    <div class="image-preview border border-secondary rounded-circle overflow-hidden d-flex justify-content-center align-items-center" style="width: 120px; height: 120px;">
                                        <img src="{{ asset('front-end/assets/images/staff-1.jpg') }}" alt="Profile Image" class="img-fluid">
                                    </div>
                                </label>
                                <input type="file" class="d-none" id="image" name="image" accept="image/*">
                                <label for="image" class="d-block">Upload Your Profile Image</label>
                            </div>
                            <button type="button" class="btn btn-secondary mt-3" id="cancelImage">Cancel Image</button>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">First Name *</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="John" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name *</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" placeholder="Doe" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="age">Age *</label>
                                    <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}" placeholder="30" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nationality">Nationality *</label>
                                    <input type="text" class="form-control" id="nationality" name="nationality" value="{{ old('nationality') }}" placeholder="American" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="freelance">Freelance *</label>
                                    <select class="form-control" id="freelance" name="freelance" required>
                                        <option value="1" {{ old('freelance') == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('freelance') == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="languages">Languages *</label>
                                    <input type="text" class="form-control" id="languages" name="languages" value="{{ old('languages') }}" placeholder="English, Spanish" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="role">Role *</label>
                                    <input type="text" class="form-control" id="role" name="role" value="{{ old('role') }}" placeholder="e.g., Developer" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="birth">Date of Birth *</label>
                                    <input type="date" class="form-control" id="birth" name="birth" value="{{ old('birth') }}" required>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('image').addEventListener('change', function() {
        const [file] = this.files;
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('.image-preview img').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    document.getElementById('cancelImage').addEventListener('click', function() {
        document.getElementById('image').value = '';
        document.querySelector('.image-preview img').src = '{{ asset('front-end/assets/images/WhatsApp%20Image%202023-05-19%20at%208.22.27%20PM%20(1).png') }}';
    });
</script>
@endsection
