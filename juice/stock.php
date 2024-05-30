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
    <form action="stockin.php" method="post">
        <h1>Stock In</h1>
        Product: <select name="pid" id="">
            <?php
            include('conn.php');

            $select = "SELECT * from products";
            $run = mysqli_query($xonn,$select);
            
            while($row=mysqli_fetch_assoc($run)){
                ?>
                <option value="<?= $row['pid']?>"><?=$row['pname']?></option>
                <?php
            }
            ?>
        </select><br><br>
        Quantity: <input type="number" name="qty"><br><br>
        Date: <input type="date" name="date"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>