@extends('layouts.master-user')
@section('title', 'Education')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="card-title text-center">Edit Education Details</h4>
                </div>
                <div class="card-body">
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

                    <form action="{{ route('education.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div id="educationFields">
                            @foreach($educations as $education)
                                <div class="border p-3 mb-3 rounded education-group" id="educationGroup{{ $education->id }}">
                                    <input type="hidden" name="education[{{ $education->id }}][id]" value="{{ $education->id }}">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="title{{ $education->id }}">Title</label>
                                            <input type="text" class="form-control" name="education[{{ $education->id }}][title]" value="{{ $education->title }}" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="duration{{ $education->id }}">Duration</label>
                                            <input type="text" class="form-control" name="education[{{ $education->id }}][duration]" value="{{ $education->duration }}" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="institution{{ $education->id }}">Institution</label>
                                            <input type="text" class="form-control" name="education[{{ $education->id }}][institution]" value="{{ $education->institution }}" required>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-danger remove-education" onclick="removeEducation({{ $education->id }})">Remove</button>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center mb-3">
                            <button type="button" id="addEducation" class="btn btn-outline-primary">+ Add Education</button>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let educationIndex = 0;
    document.getElementById('addEducation').addEventListener('click', function() {
        const container = document.getElementById('educationFields');
        let fieldHTML = `
            <div class="border p-3 mb-3 rounded education-group" id="educationGroupNew${educationIndex}">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="titleNew${educationIndex}">Title</label>
                        <input type="text" class="form-control" name="education[new${educationIndex}][title]" placeholder="Degree or Certificate" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="durationNew${educationIndex}">Duration</label>
                        <input type="text" class="form-control" name="education[new${educationIndex}][duration]" placeholder="e.g., 2018-2022" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="institutionNew${educationIndex}">Institution</label>
                        <input type="text" class="form-control" name="education[new${educationIndex}][institution]" placeholder="School or University" required>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-danger remove-education" onclick="removeEducation('New${educationIndex}')">Remove</button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', fieldHTML);
        educationIndex++;
    });
});

function removeEducation(index) {
    const group = document.getElementById('educationGroup' + index);
    group.remove();
}
</script>
@endsection
