<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rental Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 600px;">
    
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Edit Rental Record</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('vehicleform.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Customer Name</label>
                    <input type="text" name="customer_name" value="{{ $data->customer_name }}" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Vehicle Type</label>
                    <input type="text" name="vehicle_type" value="{{ $data->vehicle_type }}" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Rental Rate per Day ($)</label>
                    <input type="number" step="0.01" name="rental_rate" value="{{ $data->rental_rate }}" class="form-control" required>
                </div>
                
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success flex-grow-1">Update Data</button>
                    <a href="{{ route('vehicleform.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>