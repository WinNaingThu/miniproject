<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration - Step 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5" style="max-width: 500px;">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Registration - Step 2 (Additional Info)</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('register.postStep2') }}" method="POST">
                @csrf
                
                <input type="hidden" name="name" value="{{ $step1Data['name'] }}">
                <input type="hidden" name="email" value="{{ $step1Data['email'] }}">

                <div class="mb-3">
                    <label class="form-label">City</label>
                    <input type="text" name="city" class="form-control" placeholder="Enter your city" required>
                </div>
                
                <button type="submit" class="btn bg-success text-white w-100">Submit Registration</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>