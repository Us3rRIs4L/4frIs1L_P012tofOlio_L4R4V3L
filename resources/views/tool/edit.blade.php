@extends('dashboard')

@section('title', 'Edit Tool')

@section('content')
<div class="container">
    <h1>Edit Tool</h1>
    <form action="{{ route('tool.update', $tool->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tool Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $tool->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
