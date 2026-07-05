@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Add Customer</h2>
    
    <form method="POST" action="{{ route('customers.store') }}">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea name="address" class="form-control" rows="3"></textarea>
        </div>
        
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection