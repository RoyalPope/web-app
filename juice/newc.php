<?php
include('astart.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylee.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include('nav.php');
    ?>
    <form action="insertc.php" method="post">
        <h1>New Customer</h1>
        Name: <input type="text" name="cname"><br><br>
        Address: <input type="text" name="address"><br><br>
        Phone: <input type="number" name="tel"><br><br>
        Credit: <input type="number" name="credit"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>