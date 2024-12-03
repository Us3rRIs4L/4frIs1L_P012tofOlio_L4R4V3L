@extends('dashboard')

@section('title', 'Skills List')

@section('content')
<div class="container">
    <h1>Skills List</h1>
    <a href="{{ route('skill.create') }}" class="btn btn-primary mb-3">Add New Skill</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Progress (%)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($skills as $skill)
                <tr>
                    <td>{{ $skill->id }}</td>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->progress }}</td>
                    <td>
                        <a href="{{ route('skill.edit', $skill->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('skill.destroy', $skill->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No skills found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
