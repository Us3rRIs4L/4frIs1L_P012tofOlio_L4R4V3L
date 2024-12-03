@extends('dashboard')

@section('title', 'Edit Experience')

@section('content')
<div class="container">
    <h1>Edit Experience</h1>
    <form action="{{ route('experience.update', $experience->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" id="position" class="form-control" value="{{ $experience->position }}" required>
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" name="company" id="company" class="form-control" value="{{ $experience->company }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $experience->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="start">Start Date</label>
            <input type="date" name="start" id="start" class="form-control" value="{{ $experience->start }}" required>
        </div>
        <div class="form-group">
            <label for="end">End Date</label>
            <input type="date" name="end" id="end" class="form-control" value="{{ $experience->end }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
