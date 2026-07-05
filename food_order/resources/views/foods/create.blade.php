@extends('layouts.master')
@section('content')
<h2>Add Food</h2>
<form method="POST" action="{{
route('foods.store') }}">
@csrf
<div class="mb-3">
<label>Food Name</label>
<input type="text" name="name"
class="form-control">
@error('name')
<small class="text-danger">{{
$message }}</small>
@enderror
</div>
<div class="mb-3">
<label> Category</label>
<input type="text" name="category" class="form-control">

@error('category')
<small class="text-danger">
    {{ $message }}
</small>
@enderror
</div>
<div class="mb-3">
    <label> Price </label>
    <input type="text" name="price" class="from-control">
    @error('price')
    <small class="text-danger">{{
$message }}</small>
@enderror
</div>
<div class="mb-3">
<label>Description</label>
<textarea name="description"
class="form-control"></textarea>
</div>
<button class="btn btn-success">
Save Food
</button>
</form>
@endsection