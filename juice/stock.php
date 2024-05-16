<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="stockin.php" method="post">
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
        </select>
        Quantity: <input type="number" name="qty">
        Date: <input type="date" name="date">
        <input type="submit" value="Submit">
    </form>
</body>
</html>