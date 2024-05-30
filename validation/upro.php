<?php
include('astart.php');
if($_SESSION['type'] != 'manager'){
    echo "<script>
    alert('Access Denied');
    window.location.href='stout.php';
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
<?php
    include('nav.php');
    ?>
    <a href="out.php">Log Out</a>
    <form action="istoi.php" method="post">
        <h1>Stock In</h1>
    <?php
    include('xonn.php');
    $id = $_GET['id'];
    $fetch = "SELECT * from stockin where inId = $id";
    $run = mysqli_query($xonn,$fetch);
    $line = mysqli_fetch_assoc($run);
    ?>
        Product: <select name="pid" id="">
            <option value="">Select
            <?php
            $sel = "SELECT * from product";
            $sql = mysqli_query($xonn,$sel);

            while($row = mysqli_fetch_assoc($sql)){
                ?>
                <option value="<?= $row['pid']?>"<?=($line['pid']==$row['pid'])?"selected":"";?>><?= $row['pname']?></option>
                <?php
            }

            ?>
            </option>
        </select>
        Quantity: <input type="number" name="qty" value="<?=$line['quantity']?>">
        <input type="submit" value="submit">
    </form>
</body>
</html>