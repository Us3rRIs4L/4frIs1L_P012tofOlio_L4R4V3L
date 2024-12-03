@extends('dashboard')

@section('title', 'Edit Framework')

@section('content')
<div class="container">
    <h1>Edit Framework</h1>
    <form action="{{ route('framework.update', $framework->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Framework Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $framework->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
