@extends('dashboard')

@section('title', 'Training')

@section('content')
<div class="container">
    <h1>Training List</h1>
    <a href="{{ route('training.create') }}" class="btn btn-primary mb-3">Add New Training</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Organization</th>
                <th>Start</th>
                <th>End</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($trainings as $training)
                <tr>
                    <td>{{ $training->id }}</td>
                    <td>{{ $training->title }}</td>
                    <td>{{ $training->organization }}</td>
                    <td>{{ $training->start }}</td>
                    <td>{{ $training->end }}</td>
                    <td>
                        <a href="{{ route('training.edit', $training->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('training.destroy', $training->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No training records found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
