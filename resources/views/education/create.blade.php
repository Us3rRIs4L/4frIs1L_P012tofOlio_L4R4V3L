@extends('dashboard')

@section('title', 'Add New Education')

@section('content')
<div class="container">
    <h1>Add New Education</h1>
    <form action="{{ route('education.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="school">School</label>
            <input type="text" name="school" id="school" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" id="location" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="degree">Degree</label>
            <input type="text" name="degree" id="degree" class="form-control">
        </div>
        <div class="form-group">
            <label for="major">Major</label>
            <input type="text" name="major" id="major" class="form-control">
        </div>
        <div class="form-group">
            <label for="start">Start Date</label>
            <input type="date" name="start" id="start" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="end">End Date</label>
            <input type="date" name="end" id="end" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
