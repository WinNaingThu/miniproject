<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Rental Entry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm mb-5">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Vehicle Rental Entry</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('vehicleform.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label">Customer Name</label>
                    <input type="text" name="customer_name" class="form-control" placeholder="Enter customer name" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Vehicle Type</label>
                    <input type="text" name="vehicle_type" class="form-control" placeholder="e.g. Car, Bike, Truck, Van" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Rental Rate per Day ($)</label>
                    <input type="number" step="0.01" name="rental_rate" class="form-control" placeholder="Enter rental price" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Save Record</button>
            </form>
        </div>
    </div>

    <div class="table-responsive">
        <h2 class="mb-3">Rental Records List</h2>
        <table class="table table-striped table-hover table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Vehicle Type</th>
                    <th>Rental Rate</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($vehicleData as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->customer_name }}</td>
                    <td>{{ $data->vehicle_type }}</td>
                    <td>${{ number_format($data->rental_rate, 2) }}</td>
                    <td>
                        <a href="{{ route('vehicleform.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('vehicleform.destroy', $data->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">No records found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>