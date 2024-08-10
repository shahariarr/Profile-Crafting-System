@extends('layouts.master-user')
@section('title', 'Blog')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Edit Blog Post</h4>

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

                    <form action="{{ route('blog-post.update', ['id' => $blogPost->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title Field -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $blogPost->title) }}" required>
                        </div>

                        <!-- Content Field -->
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content', $blogPost->content) }}</textarea>
                        </div>

                        <!-- Image Upload Field -->
                        <div class="mb-3 custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>

                        <!-- Display Current Image if exists -->
                        @if($blogPost->image)
                            <div class="mb-3">
                                <img src="{{ asset('blog_images/' . $blogPost->image) }}" alt="Current Image" class="img-fluid mt-2" style="max-width: 150px;">
                            </div>
                        @endif

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom styles -->
<style>
    .form-label {
        font-weight: bold;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .custom-file-input ~ .custom-file-label::after {
        content: "Browse";
    }
    .img-fluid {
        border-radius: 5px;
        border: 1px solid #ddd;
    }
</style>
@endsection
