@extends('dashboard')

@section('title', 'Add New Certification')

@section('content')
<div class="container">
    <h1>Add New Certification</h1>
    <form action="{{ route('certification.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="organization">Organization</label>
            <input type="text" name="organization" id="organization" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="issue_date">Issue Date</label>
            <input type="date" name="issue_date" id="issue_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="expiry_date">Expiry Date</label>
            <input type="date" name="expiry_date" id="expiry_date" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
