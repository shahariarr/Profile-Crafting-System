@extends('layouts.master-user')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4 class="card-title">Add Experience Details</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('experience.store') }}" method="POST">
                        @csrf
                        <div id="experienceFields"></div>
                        <div class="text-center mb-3">
                            <button type="button" id="addExperience" class="btn btn-outline-primary">+ Add Experience</button>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Submit</button>
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
            <div class="mb-3 border p-3 rounded experience-group" id="experienceGroup${experienceIndex}">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="title${experienceIndex}" class="form-label">Title</label>
                        <input type="text" class="form-control" name="experience[${experienceIndex}][title]" placeholder="Job Title" required>
                    </div>
                    <div class="col-md-4">
                        <label for="company${experienceIndex}" class="form-label">Company</label>
                        <input type="text" class="form-control" name="experience[${experienceIndex}][company]" placeholder="Company Name" required>
                    </div>
                    <div class="col-md-4">
                        <label for="duration${experienceIndex}" class="form-label">Duration</label>
                        <input type="text" class="form-control" name="experience[${experienceIndex}][duration]" placeholder="e.g., Jan 2018 - Dec 2022" required>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-danger mt-3 remove-experience" onclick="removeExperience(${experienceIndex})">Remove</button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', fieldHTML);
        experienceIndex++;
    });
});

function removeExperience(index) {
    const group = document.getElementById('experienceGroup' + index);
    group.remove();
}
</script>
@endsection
