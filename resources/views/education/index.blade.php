@extends('dashboard')

@section('title', 'Education')

@section('content')
<div class="container">
    <h1>Education List</h1>
    <a href="{{ route('education.create') }}" class="btn btn-primary mb-3">Add New Education</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>School</th>
                <th>Location</th>
                <th>Degree</th>
                <th>Major</th>
                <th>Start</th>
                <th>End</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($educations as $education)
                <tr>
                    <td>{{ $education->id }}</td>
                    <td>{{ $education->school }}</td>
                    <td>{{ $education->location }}</td>
                    <td>{{ $education->degree }}</td>
                    <td>{{ $education->major }}</td>
                    <td>{{ $education->start }}</td>
                    <td>{{ $education->end }}</td>
                    <td>
                        <a href="{{ route('education.edit', $education->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('education.destroy', $education->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">No education records found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
