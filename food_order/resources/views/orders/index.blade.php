@extends('layouts.master')

@section('content')
<h2>Order List</h2>

<a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">
    + Create Order
</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Customer</th>
        <th>Food</th>
        <th>Quantity</th>
        <th>Total Price</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    @foreach($orders as $order)
    <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->customer->name }}</td>
        <td>{{ $order->food->name }}</td>
        <td>{{ $order->quantity }}</td>
        <td>${{ $order->total_price }}</td>
        <td>
            <span class="badge bg-info">
                {{ $order->status }}
            </span>
        </td>
        <td>
            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm">
                Edit
            </a>

            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this order?')">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection