<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('index.php');
    ?>
    <form action="add.php" method="post">
        <h1>Add New Address</h1>
        <input type="text" name="district"><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>