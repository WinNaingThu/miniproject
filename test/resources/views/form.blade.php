<!DOCTYPE html>
<html lang="my">
<head> </head>
<body>

    <h2>Student Form</h2>

    <form action="#" method="POST">
        @csrf
        
        <p>
            <label for="name">(Name):</label>
            <input type="text"  name="name" required>
        </p>

        <p>
            <label for="age">(Age):</label>
            <input type="number"  name="age" required>
        </p>

        <p>
            <button type="submit">Submit</button>
        </p>

    </form>

</body>
</html>