@extends('dashboard')

@section('title', 'Edit Skill')

@section('content')
<div class="container">
    <h1>Edit Skill</h1>
    <form action="{{ route('skill.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Skill Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $skill->name }}" required>
        </div>
        <div class="form-group">
            <label for="progress">Progress</label>
            <input type="number" name="progress" id="progress" class="form-control" value="{{ $skill->progress }}" min="0" max="100" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
