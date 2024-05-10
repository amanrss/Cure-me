<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #8e9eab, #eef2f3);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 500px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            text-align: center;
        }
        h1 {
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 28px;
        }
        p {
            color: #555;
            font-size: 18px;
            margin-bottom: 30px;
        }
        .back-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .back-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Success</h1>
        <?php
        // Display success message from query parameter
        if (isset($_GET["message"])) {
            $successMessage = $_GET["message"];
            echo "<p>$successMessage</p>";
        }
        ?>
        <a href="index.html" class="back-link">Back to Home</a>
    </div>
</body>
</html>
