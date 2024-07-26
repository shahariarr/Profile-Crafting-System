@extends('layouts.master-user')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Add Skill</h4>
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
                        <form action="{{ route('skills.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="skills">Skills</label>
                                <select class="js-example-basic-multiple form-control" id="skills" name="skills[]" multiple="multiple">
                                    @foreach($skills as $skill)
                                        <option value="{{ $skill }}" {{ in_array($skill, $userSkills) ? 'selected' : '' }}>{{ $skill }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Add Skill</button>
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
        /* .select2-selection__rendered {
            max-height: 180px; /* Adjust this value as needed */
            overflow-y: auto;
        } */
    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: "Select skills",
                // minimumResultsForSearch: 0,
                allowClear: true
            });
        });
    </script>
@endpush
