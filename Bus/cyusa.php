<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        }

        form {
        max-width: 400px;
        margin: 0 auto;
        padding: 40px;
        background-color: #fff;
        border-radius: 8px;
        margin-top: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
        font-size: 24px;
        margin-bottom: 20px;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        }

        input[type="submit"] {
        background-color: #28c4aa;
        color: white;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
        background-color: #411a4d;
        transform: scale(1.05);
        }

    </style>
</head>
<body>
    <?php
    include("nav.html");
    ?>
    <form action="cyux.php" method="post">
        <h1>CYUSA</h1>
        Names: <input type="text" name="names">
        Address: <input type="text" name="location">
        Phone: <input type="number" name="phone">
        <input type="submit" value="Submit">
    </form>
</body>
</html>