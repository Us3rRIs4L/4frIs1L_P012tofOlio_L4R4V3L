@extends('dashboard')

@section('title', 'Projects')

@section('content')
<div class="container">
    <h1>Projects</h1>
    <a href="{{ route('project.create') }}" class="btn btn-primary">Add New Project</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td>
                    @if($project->image)
                        <img src="{{ asset('images/' . $project->id . '/' . $project->image) }}" alt="{{ $project->title }}" width="100">
                    @else
                        No Image
                    @endif
                </td>
                <td>
                    <a href="{{ route('project.edit', $project->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('project.destroy', $project->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
