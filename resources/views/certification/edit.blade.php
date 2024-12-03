@extends('dashboard')

@section('title', 'Edit Certification')

@section('content')
<div class="container">
    <h1>Edit Certification</h1>
    <form action="{{ route('certification.update', $certification->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $certification->title }}" required>
        </div>
        <div class="form-group">
            <label for="organization">Organization</label>
            <input type="text" name="organization" id="organization" class="form-control" value="{{ $certification->organization }}" required>
        </div>
        <div class="form-group">
            <label for="issue_date">Issue Date</label>
            <input type="date" name="issue_date" id="issue_date" class="form-control" value="{{ $certification->issue_date }}" required>
        </div>
        <div class="form-group">
            <label for="expiry_date">Expiry Date</label>
            <input type="date" name="expiry_date" id="expiry_date" class="form-control" value="{{ $certification->expiry_date }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
