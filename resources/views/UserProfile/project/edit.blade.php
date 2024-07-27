@extends('layouts.master-user')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4 class="card-title">Edit Project Details</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('project.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div id="projectFields">
                            @foreach($projects as $project)
                            <div class="mb-3 border p-3 rounded project-group" id="projectGroup{{ $project->id }}">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name{{ $project->id }}" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="projects[{{ $project->id }}][name]" value="{{ $project->name }}" placeholder="Project Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tools{{ $project->id }}" class="form-label">Tools</label>
                                        <input type="text" class="form-control" name="projects[{{ $project->id }}][tools]" value="{{ $project->tools }}" placeholder="Tools Used" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="description{{ $project->id }}" class="form-label">Description</label>
                                        <textarea class="form-control" name="projects[{{ $project->id }}][description]" rows="2" placeholder="Project Description" required>{{ $project->description }}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="role{{ $project->id }}" class="form-label">Role</label>
                                        <input type="text" class="form-control" name="projects[{{ $project->id }}][role]" value="{{ $project->role }}" placeholder="Your Role" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="source_code{{ $project->id }}" class="form-label">Source Code (optional)</label>
                                        <input type="url" class="form-control" name="projects[{{ $project->id }}][source_code]" value="{{ $project->source_code }}" placeholder="Source Code URL">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="demo{{ $project->id }}" class="form-label">Demo (optional)</label>
                                        <input type="url" class="form-control" name="projects[{{ $project->id }}][demo]" value="{{ $project->demo }}" placeholder="Demo URL">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="image{{ $project->id }}" class="form-label">Image (optional)</label>
                                            <input type="file" class="form-control" name="projects[{{ $project->id }}][image]" id="image{{ $project->id }}">
                                            @if($project->image)
                                            <img src="{{ Storage::url('project_images/' . $project->image) }}" alt="Project Image" class="img-fluid mt-2" style="max-height: 150px;">
                                             @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-danger mt-3 remove-project" onclick="removeProject({{ $project->id }})">Remove</button>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-center mb-3">
                            <button type="button" id="addProject" class="btn btn-outline-primary">+ Add Project</button>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Update Projects</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let projectIndex = {{ $projects->count() }};
    document.getElementById('addProject').addEventListener('click', function() {
        const container = document.getElementById('projectFields');
        let fieldHTML = `
            <div class="mb-3 border p-3 rounded project-group" id="projectGroup${projectIndex}">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name${projectIndex}" class="form-label">Name</label>
                        <input type="text" class="form-control" name="projects[new${projectIndex}][name]" placeholder="Project Name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="tools${projectIndex}" class="form-label">Tools</label>
                        <input type="text" class="form-control" name="projects[new${projectIndex}][tools]" placeholder="Tools Used" required>
                    </div>
                    <div class="col-12">
                        <label for="description${projectIndex}" class="form-label">Description</label>
                        <textarea class="form-control" name="projects[new${projectIndex}][description]" rows="2" placeholder="Project Description" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="role${projectIndex}" class="form-label">Role</label>
                        <input type="text" class="form-control" name="projects[new${projectIndex}][role]" placeholder="Your Role" required>
                    </div>
                    <div class="col-md-6">
                        <label for="source_code${projectIndex}" class="form-label">Source Code (optional)</label>
                        <input type="url" class="form-control" name="projects[new${projectIndex}][source_code]" placeholder="Source Code URL">
                    </div>
                    <div class="col-md-6">
                        <label for="demo${projectIndex}" class="form-label">Demo (optional)</label>
                        <input type="url" class="form-control" name="projects[new${projectIndex}][demo]" placeholder="Demo URL">
                    </div>
                    <div class="col-md-6">
                        <label for="image${projectIndex}" class="form-label">Image (optional)</label>
                        <input type="file" class="form-control" name="projects[new${projectIndex}][image]" id="image${projectIndex}">
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
