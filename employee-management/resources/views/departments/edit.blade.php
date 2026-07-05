@extends('layouts.master')

@section('content')
<div class="container mt-4" style="max-width: 600px;">
    <h2>Edit Department</h2>
    
    <form method="POST" action="{{ route('departments.update', $department->id) }}">
        @csrf
        @method('PUT') <!-- 💡 Laravel မှာ Update လုပ်ဖို့ ဒါလေး မဖြစ်မနေ ပါရပါမယ် -->

        <div class="mb-3">
            <label class="form-label">Department Name</label>
            <input type="text" name="name" class="form-control" value="{{ $department->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection