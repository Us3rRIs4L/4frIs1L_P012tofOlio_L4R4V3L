@extends('dashboard')

@section('title', 'Add New Tool')

@section('content')
<div class="container">
    <h1>Add New Tool</h1>
    <form action="{{ route('tool.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Tool Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
