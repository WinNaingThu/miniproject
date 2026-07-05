<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Time Project</title>
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            padding-top: 50px;
        }
        .container {
            background-color: white;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            min-width: 300px;
        }
        h1 { color: #333; font-size: 24px; }
        p { font-size: 18px; color: #555; }
        .highlight { font-weight: bold; color: #007bff; display: block; margin-top: 10px; font-size: 22px; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Laravel Time & Date Project</h1>
        <hr>
        
        <p>Current Date & Time: <span class="highlight">{{ $currentTime }}</span></p>
    </div>

</body>
</html>