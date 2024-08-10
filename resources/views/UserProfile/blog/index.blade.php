@extends('layouts.master-user')
@section('title', 'Blog')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">All Blog Posts</h4>

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

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogPosts as $blogPost)
                                    <tr>
                                        <td>{{ Str::limit($blogPost->title, 50) }}</td>
                                        <td>{{ Str::limit($blogPost->content, 50) }}</td>
                                        <td>
                                            @if ($blogPost->image)
                                                <img src="{{ asset('blog_images/' . $blogPost->image) }}" alt="Image" class="img-thumbnail" style="max-width: 100px;">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('blog-post.edit', $blogPost->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('blog-post.destroy', $blogPost->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('blog-post.create') }}" class="btn btn-primary mt-3">Create New Blog Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
