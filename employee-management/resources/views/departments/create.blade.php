@extends('layouts.master')

@section('content')
<div class="mb-3">
    <h2>Department Create Page</h2>
</div>

<form method="POST" action="{{ route('departments.store') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter department name" required>
    </div>

    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('departments.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection