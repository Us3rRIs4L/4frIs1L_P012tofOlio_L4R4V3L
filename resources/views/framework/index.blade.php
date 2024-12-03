@extends('dashboard')

@section('title', 'Framework List')

@section('content')
<div class="container">
    <h1>Framework List</h1>
    <a href="{{ route('framework.create') }}" class="btn btn-primary mb-3">Add New Framework</a>

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
            @forelse ($frameworks as $framework)
                <tr>
                    <td>{{ $framework->id }}</td>
                    <td>{{ $framework->name }}</td>
                    <td>
                        <a href="{{ route('framework.edit', $framework->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('framework.destroy', $framework->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No frameworks found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
