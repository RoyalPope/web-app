<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="pays.php" method="post">
Customer: <select name="cid" id="">
            <?php
                include('conn.php');

            $sele = "SELECT * from customers";
            $ru = mysqli_query($xonn,$sele);
            
            while($rows=mysqli_fetch_assoc($ru)){
                ?>
                <option value="<?= $rows['cid'];?>"><?=$rows['cname'];?></option>
                <?php
            }
            ?>
        </select>
        Amount: <input type="number" name="price">
        Date: <input type="date" name="date">
        <input type="submit" value="submit">
</form>
</body>
</html>