<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Register Form</title>
</head>
<body>

    <h2>(Register)</h2>

    <form action="/r" method="POST">
        @csrf 

        <p>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required>
        </p>

        <p>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </p>

        <p>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required>
        </p>

        <p>
            <button type="submit">Register</button>
        </p>

    </form>

</body>
</html>