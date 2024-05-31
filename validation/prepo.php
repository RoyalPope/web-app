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
    <form action="" method="post">
        start: <input type="datetime-local" name='start'>
        end: <input type="datetime-local" name='end'>
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
        <input type="submit" value="submit" name="run">
    </form>
    <?php
    if(isset($_POST['run'])){
    ?>
    <table border=1 cellspacing=0>
        <tr>
        <th>No</th>
        <th>Product</th>
        <th>Quantity</th>
        </tr>
        <?php
        include('xonn.php');
        $start = $_POST['start'];
        $end = $_POST['end'];
        $pid = $_POST['pid'];
        $n = 0;
        $total=0;
        $select = "SELECT stockin.inId, product.pid, product.pname, stockin.quantity, stockin.date from stockin 
        inner join product on stockin.pid=product.pid where product.pid='$pid' and stockin.date between '$start'and'$end'";
        $sql = mysqli_query($xonn,$select);

        while($row = mysqli_fetch_assoc($sql)){
            $total = $total+$row['quantity'];
            $n++;
            ?>
            <tr>
                <th><?=$n?></th>
                <td><?= $row['pname']?></td>
                <td><?= $row['quantity']?></td>

            </tr>
            <?php
        }
        
        ?>
        <tr>
            <th>Total:</th>
            <td colspan="2"><?=$total;?></td>
        </tr>
    </table>
    <?php
    }else{
        echo "";
    }
    ?>
</body>
</html>