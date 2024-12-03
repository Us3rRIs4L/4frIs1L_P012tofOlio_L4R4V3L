@extends('dashboard')

@section('title', 'Add New Framework')

@section('content')
<div class="container">
    <h1>Add New Framework</h1>
    <form action="{{ route('framework.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Framework Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
