@extends('dashboard')

@section('title', 'Add New Project')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Add New Project</h1>
    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter project title" required>
        </div>
        <div class="form-group mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter project description"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image" class="form-label">Project Image</label>
            <input type="file" name="image" id="image" class="form-control" required>
            <small class="text-muted">Supported formats: jpg, jpeg, png (max 2MB).</small>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('project.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
