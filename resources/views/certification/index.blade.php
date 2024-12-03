@extends('dashboard')

@section('title', 'Certifications')

@section('content')
<div class="container">
    <h1>Certification List</h1>
    <a href="{{ route('certification.create') }}" class="btn btn-primary mb-3">Add New Certification</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Organization</th>
                <th>Issue Date</th>
                <th>Expiry Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($certifications as $certification)
                <tr>
                    <td>{{ $certification->id }}</td>
                    <td>{{ $certification->title }}</td>
                    <td>{{ $certification->organization }}</td>
                    <td>{{ $certification->issue_date }}</td>
                    <td>{{ $certification->expiry_date }}</td>
                    <td>
                        <a href="{{ route('certification.edit', $certification->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('certification.destroy', $certification->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No certifications found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
