@extends('layouts.master')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Department List Page</h2>
    <a href="{{ route('departments.create') }}" class="btn btn-primary">
        + Add Department
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($departments as $department)
        <tr>
            <td>{{ $department->id }}</td>
            <td>{{ $department->name }}</td>
            <td>
                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection