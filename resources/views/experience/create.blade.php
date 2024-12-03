@extends('dashboard')

@section('title', 'Add New Experience')

@section('content')
<div class="container">
    <h1>Add New Experience</h1>
    <form action="{{ route('experience.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" id="position" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" name="company" id="company" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
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
