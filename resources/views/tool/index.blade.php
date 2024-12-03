@extends('dashboard')

@section('title', 'Tools List')

@section('content')
<div class="container">
    <h1>Tools List</h1>
    <a href="{{ route('tool.create') }}" class="btn btn-primary mb-3">Add New Tool</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tools as $tool)
                <tr>
                    <td>{{ $tool->id }}</td>
                    <td>{{ $tool->name }}</td>
                    <td>
                        <a href="{{ route('tool.edit', $tool->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('tool.destroy', $tool->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No tools found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
