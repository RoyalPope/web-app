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
    include('nav2.php')
    ?>
    <form action="sales.php" method="post">
        <h1>Record sales</h1>
        Product:<select name="pid" id="">
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
        Customer: <select name="cid" id="">
            <?php

            $sele = "SELECT * from customers";
            $ru = mysqli_query($xonn,$sele);
            
            while($rows=mysqli_fetch_assoc($ru)){
                ?>
                <option value="<?= $rows['cid']?>"><?=$rows['cname']?></option>
                <?php
            }
            ?>
        </select><br><br>
        Quantity: <input type="number" name="qty"><br><br>
        Date: <input type="date" name="date"><br><br>
        Price: <input type="number" name="price"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>