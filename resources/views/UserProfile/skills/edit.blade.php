@extends('layouts.master-user')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Edit Skills</h4>
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
                        <form action="{{ route('skills.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="skills">Skills</label>
                                <select class="js-example-basic-multiple form-control" id="skills" name="skills[]" multiple="multiple">
                                    @foreach($skills as $skill)
                                        <option value="{{ $skill }}" {{ in_array($skill, $userSkills) ? 'selected' : '' }}>{{ $skill }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <p class="text-primary">Note: If you want to add your new skill then you can edit it</p>
                            <button type="submit" class="btn btn-primary btn-block">Update Skills</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .select2-container .select2-selection--multiple {
            height: auto;
            min-height: 100px; /* Adjust this value as needed */
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: "Select skills",
                minimumResultsForSearch: 0,
                allowClear: true
            });
        });
    </script>
@endpush
