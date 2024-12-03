@extends('dashboard')

@section('title', 'Edit Training')

@section('content')
<div class="container">
    <h1>Edit Training</h1>
    <form action="{{ route('training.update', $training->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $training->title }}" required>
        </div>
        <div class="form-group">
            <label for="organization">Organization</label>
            <input type="text" name="organization" id="organization" class="form-control" value="{{ $training->organization }}" required>
        </div>
        <div class="form-group">
            <label for="start">Start Date</label>
            <input type="date" name="start" id="start" class="form-control" value="{{ $training->start }}" required>
        </div>
        <div class="form-group">
            <label for="end">End Date</label>
            <input type="date" name="end" id="end" class="form-control" value="{{ $training->end }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
