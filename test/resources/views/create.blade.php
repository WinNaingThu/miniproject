<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="UTF-8">
    <title>Product Input Form</title>
</head>
<body>

    <h2>Fill Your Product</h2>

    <form action="/win" method="POST">
        @csrf 

        <p>
            <label for="product_name">Product Name:</label><br>
            <input type="text" id="product_name" name="product_name" required>
        </p>

        <p>
            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price" step="0.01" required>
        </p>

        <p>
            <label for="quantity">Quantity:</label><br>
            <input type="number" id="quantity" name="quantity" required>
        </p>

        <p>
            <label for="category">Category:</label><br>
            <input type="text" id="category" name="category" required>
        </p>

        <p>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4" cols="30"></textarea>
        </p>

        <p>
            <button type="submit">Save Product</button>
        </p>

    </form>

</body>
</html>