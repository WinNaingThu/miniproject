<html>
    <head></head>
    <body>
        <h1> Job Form </h1>
        <form action="/jobexample" method="POST">
            @csrf


            <label> Name:</label>
            <input type="text" name="name" required>
            <br><br>


            <label> Email:</label>
            <input type="text" name="email" required>
            <br><br>


            <label> Phone:</label>
            <input type="number" name="phone" required>
            <br><br>


            <label> Position:</label>
            <input type="text" name="position" required>
            <br><br>


            <label> Address:</label>
            <input type="text" name="address" required>
            <br><br>

            <button type="submit"> Submit </button>


        </form>
    </body>
</html>