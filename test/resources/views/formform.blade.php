<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="UTF-8">
    <title>Product Result</title>
</head>
<body>

    <h2> Product List </h2>

    <p>
        <strong>Product Name:</strong> {{ $product_name }}
    </p>

    <p>
        <strong>Price:</strong> {{ $price }}
    </p>

    <p>
        <strong>Quantity:</strong> {{ $quantity }}
    </p>

    <p>
        <strong>Category:</strong> {{ $category }}
    </p>

    <p>
        <strong>Description:</strong> {{ $description ?? 'Description မရှိပါ' }}
    </p>

    <hr>
    
    <p>
        <a href="/win"> Exit </a>
    </p>

</body>
</html>