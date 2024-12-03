@extends('dashboard')

@section('title', 'Edit Education')

@section('content')
<div class="container">
    <h1>Edit Education</h1>
    <form action="{{ route('education.update', $education->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="school">School</label>
            <input type="text" name="school" id="school" class="form-control" value="{{ $education->school }}" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ $education->location }}" required>
        </div>
        <div class="form-group">
            <label for="degree">Degree</label>
            <input type="text" name="degree" id="degree" class="form-control" value="{{ $education->degree }}">
        </div>
        <div class="form-group">
            <label for="major">Major</label>
            <input type="text" name="major" id="major" class="form-control" value="{{ $education->major }}">
        </div>
        <div class="form-group">
            <label for="start">Start Date</label>
            <input type="date" name="start" id="start" class="form-control" value="{{ $education->start }}" required>
        </div>
        <div class="form-group">
            <label for="end">End Date</label>
            <input type="date" name="end" id="end" class="form-control" value="{{ $education->end }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
