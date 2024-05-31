<?php
include('astart.php');
if($_SESSION['type'] != 'cashier'){
    echo "<script>
    alert('Access Denied');
    window.location.href='product.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="istou.php" method="post">
        <h1>Stock Out</h1>
        Product: <select name="pid" id="">
            <option value="">Select
            <?php
            include('xonn.php');

            $sel = "SELECT * from product";
            $sql = mysqli_query($xonn,$sel);

            while($row = mysqli_fetch_assoc($sql)){
                ?>
                <option value="<?= $row['pid']?>"><?= $row['pname']?></option>
                <?php
            }

            ?>
            </option>
        </select>
        Quantity: <input type="number" name="qty">
        <input type="submit" value="submit">

    </form>
</body>
</html>