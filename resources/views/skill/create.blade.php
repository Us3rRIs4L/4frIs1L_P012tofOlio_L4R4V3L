@extends('dashboard')

@section('title', 'Add New Skill')

@section('content')
<div class="container">
    <h1>Add New Skill</h1>
    <form action="{{ route('skill.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Skill Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="progress">Progress</label>
            <input type="number" name="progress" id="progress" class="form-control" min="0" max="100" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
