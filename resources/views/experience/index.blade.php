@extends('dashboard')

@section('title', 'Experiences')

@section('content')
<div class="container">
    <h1>Experience List</h1>
    <a href="{{ route('experience.create') }}" class="btn btn-primary mb-3">Add New Experience</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Company</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($experiences as $experience)
                <tr>
                    <td>{{ $experience->id }}</td>
                    <td>{{ $experience->position }}</td>
                    <td>{{ $experience->company }}</td>
                    <td>{{ $experience->description }}</td>
                    <td>{{ $experience->start }}</td>
                    <td>{{ $experience->end }}</td>
                    <td>
                        <a href="{{ route('experience.edit', $experience->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('experience.destroy', $experience->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No experiences available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
