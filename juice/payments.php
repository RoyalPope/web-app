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
<form action="pays.php" method="post">
    <h1>Record Payments</h1><br><br>
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
        </select><br><br>
        Amount: <input type="number" name="price"><br><br>
        Date: <input type="date" name="date"><br><br>
        <input type="submit" value="submit">
</form>
</body>
</html>