@extends('layouts.healthmaster')
@section('content')
<div class="card p-4">
    <h3 class="text-warning">Edit Data</h3>
    <form action="{{ route('healthform.update', $data->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3"><label>Patient Name:</label><input type="text" name="patient_name" value="{{ $data->patient_name }}" class="form-control" required></div>
        <div class="mb-3"><label>Test Type:</label><input type="text" name="test_type" value="{{ $data->test_type }}" class="form-control" required></div>
        <div class="mb-3"><label>Result Value:</label><input type="number" step="0.01" name="result" value="{{ $data->result }}" class="form-control" required></div>
        <button type="submit" class="btn btn-success">Update Data</button>
        <a href="{{ route('healthform.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection