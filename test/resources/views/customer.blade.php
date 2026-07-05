<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel XAMPP Database Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light p-5">

    < class="container" style="max-width: 800px;">
        
        <div class="card shadow p-4 mb-5 border-0">
            <h3 class="mb-4 text-primary">Insert Data into XAMPP Database</h3>

            @if(session('success'))
                <div class="alert alert-success border-0 shadow-sm">{{ session('success') }}</div>
            @endif

            <form action="{{ route('customer.store') }}" method="POST">
                @csrf <div class="mb-3">
                    <label class="form-label font-weight-bold">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 shadow-sm">Submit Data</button>
            </form>
        </div>


</body>
</html>