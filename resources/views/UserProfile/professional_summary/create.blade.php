@extends('layouts.master-user')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Create Professional Summary</h4>

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

                    <form action="{{ route('professional-summary.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="about_me">Tell Us About Yourself</label>
                            <textarea class="form-control" id="about_me" name="about_me" rows="6" placeholder="Your bio..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
