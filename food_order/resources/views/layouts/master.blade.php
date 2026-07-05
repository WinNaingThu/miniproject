<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f4f6f9;
        }
        .navbar-custom {
            background-color: #212529;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .nav-link-custom {
            color: rgba(255,255,255,0.75);
            text-decoration: none;
            padding: 8px 16px;
            display: inline-block;
            font-weight: 500;
        }
        .nav-link-custom:hover {
            color: #ffc107;
        }
        .main-content {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
            padding: 25px;
        }
    </style>
</head>
<body>

    <nav class="navbar-custom py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="{{ route('foods.index') }}" class="text-white text-decoration-none fs-4 fw-bold">
                Food Order <span class="text-warning">System</span>
            </a>
            
            <div class="d-flex gap-2">
                <a href="{{ route('foods.index') }}" class="nav-link-custom">Foods</a>
                <a href="{{ route('customers.index') }}" class="nav-link-custom">Customers</a>
                <a href="{{ route('orders.index') }}" class="nav-link-custom">Orders</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="main-content">
            @yield('content')
        </div>
    </div>

</body>
</html>