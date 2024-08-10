@extends('layouts.master-user')
@section('title', 'Experience')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="card-title text-center">Edit Experience Details</h4>
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
                    <form action="{{ route('experience.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div id="experienceFields">
                            @foreach($experiences as $experience)
                                <div class="border p-3 mb-3 rounded experience-group" id="experienceGroup{{ $experience->id }}">
                                    <input type="hidden" name="experience[{{ $experience->id }}][id]" value="{{ $experience->id }}">
                                    <input type="hidden" name="experience[{{ $experience->id }}][delete]" value="0" class="delete-input">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="title{{ $experience->id }}">Title</label>
                                            <input type="text" class="form-control" name="experience[{{ $experience->id }}][title]" value="{{ $experience->title }}" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="company{{ $experience->id }}">Company</label>
                                            <input type="text" class="form-control" name="experience[{{ $experience->id }}][company]" value="{{ $experience->company }}" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="duration{{ $experience->id }}">Duration</label>
                                            <input type="text" class="form-control" name="experience[{{ $experience->id }}][duration]" value="{{ $experience->duration }}" required>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-danger remove-experience" onclick="removeExperience({{ $experience->id }})">Remove</button>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center mb-3">
                            <button type="button" id="addExperience" class="btn btn-outline-primary">+ Add Experience</button>
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
    let experienceIndex = 0;
    document.getElementById('addExperience').addEventListener('click', function() {
        const container = document.getElementById('experienceFields');
        let fieldHTML = `
            <div class="border p-3 mb-3 rounded experience-group" id="experienceGroupNew${experienceIndex}">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="titleNew${experienceIndex}">Title</label>
                        <input type="text" class="form-control" name="experience[new${experienceIndex}][title]" placeholder="Job Title" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="companyNew${experienceIndex}">Company</label>
                        <input type="text" class="form-control" name="experience[new${experienceIndex}][company]" placeholder="Company Name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="durationNew${experienceIndex}">Duration</label>
                        <input type="text" class="form-control" name="experience[new${experienceIndex}][duration]" placeholder="e.g., Jan 2018 - Dec 2022" required>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-danger remove-experience" onclick="removeExperience('New${experienceIndex}')">Remove</button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', fieldHTML);
        experienceIndex++;
    });
});
function removeExperience(index) {
    const group = document.getElementById('experienceGroup' + index);
    if (group) {
        const deleteInput = group.querySelector('.delete-input');
        if (deleteInput) {
            deleteInput.value = '1';
            group.style.display = 'none';
        } else {
            group.remove();
        }
    }
}
</script>
@endsection
