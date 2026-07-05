<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Confirmed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5" style="max-width: 500px;">
    <div class="card shadow border-0">
        <div class="card-body text-center p-5">
            <div class="text-success mb-3">
                <h2>✓ Registration Successful!</h2>
            </div>
            <p class="text-muted">Thank you for registering. Here is the information you entered:</p>
            
            <ul class="list-group text-start my-4">
                <li class="list-group-item"><strong>Name:</strong> {{ $allData['name'] }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $allData['email'] }}</li>
                <li class="list-group-item"><strong>City:</strong> {{ $allData['city'] }}</li>
            </ul>

            <a href="{{ route('register.step1') }}" class="btn btn-outline-primary w-100">Register Another User</a>
        </div>
    </div>
</div>
</body>
</html>