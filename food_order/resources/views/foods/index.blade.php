@extends('layouts.master')
@section('content')
<h2>Food List</h2>
<a href="{{ route('foods.create') }}" class="btn btn-
primary mb-3">
+ Add Food
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
<th>Category</th>
<th>Price</th>
<th>Description</th>
<th>Action</th>
</tr>
@foreach($foods as $food)
<tr>
<td>{{ $food->id }}</td>
<td>{{ $food->name }}</td>
<td>{{ $food->category }}</td>
<td>${{ $food->price }}</td>
<td>{{ $food->description }}</td>
<td>
<a href="{{ route('foods.edit', $food->id) }}"
class="btn btn-warning btn-sm">
Edit
</a>
<form action="{{ route('foods.destroy', $food->id) }}"
method="POST" style="display:inline-block;">
@csrf
@method('DELETE')
<button class="btn btn-danger btn-sm"
onclick="return confirm('Are you sure to delete this food?')">
Delete
</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection