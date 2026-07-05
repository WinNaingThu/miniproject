@extends('layouts.healthmaster')
@section('content')
<div class="card shadow-sm mb-5">
    <div class="card-header bg-primary text-white"><h4>Health Checkup Entry</h4></div>
    <div class="card-body">
        <form action="/healthform" method="POST">
            @csrf
            <div class="mb-3"><label>Patient Name</label><input type="text" name="patient_name" class="form-control" required></div>
            <div class="mb-3"><label>Test Type</label><input type="text" name="test_type" class="form-control" required></div>
            <div class="mb-3"><label>Result Value</label><input type="number" step="0.01" name="result" class="form-control" required></div>
            <button type="submit" class="btn btn-primary w-100">Save Result</button>
        </form>
    </div>
</div>
<div class="table-responsive bg-white p-3 rounded shadow-sm">
    <h2>Patient List</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr><th>ID</th><th>Patient Name</th><th>Test Type</th><th>Result</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach($healthData as $data)
            <tr>
                <td>{{ $data->id }}</td><td>{{ $data->patient_name }}</td><td>{{ $data->test_type }}</td><td>{{ $data->result }}</td>
                <td>
                    <a href="{{ route('healthform.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('healthform.destroy', $data->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection