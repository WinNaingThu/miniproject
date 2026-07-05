@extends('layouts.master')

@section('content')
<h2>Customer List</h2>

<a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">
    + Add Customer
</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Action</th>
    </tr>

    @foreach($customers as $customer)
    <tr>
        <td>{{ $customer->id }}</td>
        <td>{{ $customer->name }}</td>
        <td>{{ $customer->phone }}</td>
        <td>{{ $customer->address }}</td>
        <td>
            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning btn-sm">
                Edit
            </a>

            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this customer?')">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection