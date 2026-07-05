<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .navbar-custom { background-color: #343a40; padding: 15px; }
        .nav-link-custom { color: rgba(255,255,255,0.8); text-decoration: none; padding: 5px 15px; font-weight: 500; }
        .nav-link-custom:hover { color: #ffc107; }
        .main-card { background: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); padding: 25px; }
    </style>
</head>
<body>

    <nav class="navbar-custom">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="{{ route('departments.index') }}" class="text-white text-decoration-none fs-4 fw-bold">
                Employee <span class="text-warning">Management</span>
            </a>
            <div class="d-flex">
                <a href="{{ route('departments.index') }}" class="nav-link-custom">Departments</a>
                <a href="{{ route('employees.index') }}" class="nav-link-custom">Employees</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="main-card">
            @yield('content')
        </div>
    </div>

</body>
</html>