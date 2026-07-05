@extends('layouts.master')

@section('content')
<div class="mb-3">
    <h2>Employee Create Page</h2>
</div>

<form method="POST" action="{{ route('employees.store') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter employee name" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" placeholder="Enter phone number" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Salary</label>
        <input type="number" step="0.01" name="salary" class="form-control" placeholder="Enter salary" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Select Department</label>
        <select name="department_id" class="form-select" required>
            <option value="">-- Choose Department --</option>
            @foreach($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection