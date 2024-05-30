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
    <form action="insertp.php" method="post">
        <h1>New Product</h1>
            Product Name: <input type="text" name="pname"><br><br>
            Buy Price: <input type="number" name="bprice"><br><br>
            Sell Price: <input type="number" name="sprice"><br><br>
            <input type="submit" value="Submit">
    </form>
</body>
</html>