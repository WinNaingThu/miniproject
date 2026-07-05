@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Departments List</h2>
        <a href="{{ route('departments.create') }}" class="btn btn-primary">+ Add Department</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Department Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <!-- Delete Button -->
                        <form action="{{ route('departments.destroy', $department->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this department?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection