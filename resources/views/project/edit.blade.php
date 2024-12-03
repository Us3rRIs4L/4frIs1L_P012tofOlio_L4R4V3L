@extends('dashboard')

@section('title', 'Edit Project')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Edit Project</h1>
    <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}" placeholder="Enter project title" required>
        </div>
        <div class="form-group mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter project description">{{ $project->description }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image" class="form-label">Project Image</label>
            <input type="file" name="image" id="image" class="form-control">
            @if($project->image)
                <div class="mt-2">
                    <img src="{{ asset('images/' . $project->id . '/' . $project->image) }}" alt="{{ $project->title }}" width="150">
                    <p class="text-muted mt-2">Current Image</p>
                </div>
            @endif
            <small class="text-muted">Supported formats: jpg, jpeg, png (max 2MB).</small>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('project.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
