<!DOCTYPE html>
<html>
<head>
    <title>Health System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/healthform') }}"><h1>Health System</h1></a>
            <a class="nav-link text-white fw-semibold" href="{{ url('/healthform') }}"><h1>Health Form</h1></a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>