@extends('layouts.master-user')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="card-title text-center">Add Education Details</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div id="educationFields"></div>
                        <div class="text-center mb-3">
                            <button type="button" id="addEducation" class="btn btn-outline-primary">+ Add Education</button>
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
    let educationIndex = 0;
    document.getElementById('addEducation').addEventListener('click', function() {
        const container = document.getElementById('educationFields');
        let fieldHTML = `
            <div class="border p-3 mb-3 rounded education-group" id="educationGroup${educationIndex}">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="title${educationIndex}">Title</label>
                        <input type="text" class="form-control" name="education[${educationIndex}][title]" placeholder="Degree or Certificate" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="duration${educationIndex}">Duration</label>
                        <input type="text" class="form-control" name="education[${educationIndex}][duration]" placeholder="e.g., 2018-2022" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="institution${educationIndex}">Institution</label>
                        <input type="text" class="form-control" name="education[${educationIndex}][institution]" placeholder="School or University" required>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-danger remove-education" onclick="removeEducation(${educationIndex})">Remove</button>
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
