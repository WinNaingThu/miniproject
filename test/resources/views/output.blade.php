<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Output View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light p-5">

    <div class="container" style="max-width: 800px;">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-secondary m-0">Database Records (Output)</h3>
            <a href="{{ route('customer.create') }}" class="btn btn-outline-primary fw-bold">+ Add New Data</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success border-0 shadow-sm mb-4">{{ session('success') }}</div>
        @endif

        <div class="card shadow p-4 border-0">
            <table class="table table-striped table-hover align-middle m-0">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Saved At</th>
                    </tr>
                </thead>
                <tbody>
                    @if($customers->isEmpty())
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">No data found in database yet.</td>
                        </tr>
                    @else
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->created_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>