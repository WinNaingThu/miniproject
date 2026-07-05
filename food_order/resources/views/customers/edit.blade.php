@extends('layouts.master')

@section('content')
<h2>Edit Customer</h2>

<form method="POST" action="{{ route('customers.update', $customer->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" value="{{ $customer->name }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" value="{{ $customer->phone }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Address</label>
        <textarea name="address" class="form-control" rows="3">{{ $customer->address }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection