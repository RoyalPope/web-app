<?php
include('astart.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sales.php" method="post">
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
        </select>
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
        </select>
        Quantity: <input type="number" name="qty">
        Date: <input type="date" name="date">
        Price: <input type="number" name="price">
        <input type="submit" value="submit">
    </form>
</body>
</html>