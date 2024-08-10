@extends('layouts.master-user')
@section('title', 'Skill')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
                                <select class="form-control" id="skills" name="skills[]" multiple="multiple">
                                    @foreach($skills as $skill)
                                        <option value="{{ $skill }}" {{ in_array($skill, $userSkills) ? 'selected' : '' }}>{{ $skill }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <p class="text-muted">Note: You can add new skills by selecting them.</p>
                            <button type="submit" class="btn btn-primary btn-block">Update Skills</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#skills').select2({
                placeholder: "Select skills",
                minimumResultsForSearch: Infinity,
                allowClear: true
            });
        });
    </script>
@endpush
