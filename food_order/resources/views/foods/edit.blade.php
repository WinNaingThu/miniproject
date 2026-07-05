@extends ('layout.master')
@section ('content')
<h2> Edit Food </h2>

<form method="POST" action="{{ route('foods.update', $food->id) }}">
    @csrf
    @method('PUT')
    <div class="mb-3"></div>
    <label>Food Name</label>
    <input type="text" name="name"
    value="{{ $food->name }}"
    class="form-control">
    </div>
    <div class="mb-3"></div>
    <label>Category</label>
    <input type="text" name="category"
    value="{{ $food->category }}"
    class="form-control">
    </div>
    <div class="mb-3"></div>
    <label>Price</label>
    <input type="text" name="price"
    value="{{ $food->price }}"
    class="form-control">
    </div>
<div class="mb-3">
<label>Description</label>
<textarea name="description"
class="form-control">{{ $food->description }}</textarea>
</div>
<button class="btn btn-primary">
Update Food
</button>
</form>
@endsection