@extends('layouts.master-user')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4 class="card-title">Add Project Details</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div id="projectFields"></div>
                        <div class="text-center mb-3">
                            <button type="button" id="addProject" class="btn btn-outline-primary">+ Add Project</button>
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
    let projectIndex = 0;
    document.getElementById('addProject').addEventListener('click', function() {
        const container = document.getElementById('projectFields');
        let fieldHTML = `
            <div class="mb-3 border p-3 rounded project-group" id="projectGroup${projectIndex}">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name${projectIndex}" class="form-label">Name</label>
                        <input type="text" class="form-control" name="projects[${projectIndex}][name]" placeholder="Project Name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="tools${projectIndex}" class="form-label">Tools</label>
                        <input type="text" class="form-control" name="projects[${projectIndex}][tools]" placeholder="Tools Used" required>
                    </div>
                    <div class="col-12">
                        <label for="description${projectIndex}" class="form-label">Description</label>
                        <textarea class="form-control" name="projects[${projectIndex}][description]" rows="2" placeholder="Project Description" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="role${projectIndex}" class="form-label">Role</label>
                        <input type="text" class="form-control" name="projects[${projectIndex}][role]" placeholder="Your Role" required>
                    </div>
                    <div class="col-md-6">
                        <label for="source_code${projectIndex}" class="form-label">Source Code (optional)</label>
                        <input type="url" class="form-control" name="projects[${projectIndex}][source_code]" placeholder="Source Code URL">
                    </div>
                    <div class="col-md-6">
                        <label for="demo${projectIndex}" class="form-label">Demo (optional)</label>
                        <input type="url" class="form-control" name="projects[${projectIndex}][demo]" placeholder="Demo URL">
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image${projectIndex}" class="form-label">Image (optional)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="projects[${projectIndex}][image]" id="image${projectIndex}">
                                <label class="custom-file-label" for="image${projectIndex}">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-danger mt-3 remove-project" onclick="removeProject(${projectIndex})">Remove</button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', fieldHTML);
        projectIndex++;
    });
});

function removeProject(index) {
    const group = document.getElementById('projectGroup' + index);
    group.remove();
}
</script>

@endsection
