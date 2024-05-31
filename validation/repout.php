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
        <th>Date</th>
        </tr>
        <?php
        include('xonn.php');
        $start = $_POST['start'];
        $end = $_POST['end'];
        $n = 0;
        $select = "SELECT stockout.outId, product.pid, product.pname, stockout.quantity, stockout.date from stockout 
        inner join product on stockout.pid=product.pid where stockout.date between '$start'and'$end'";
        $sql = mysqli_query($xonn,$select);

        while($row = mysqli_fetch_assoc($sql)){
            $n++;
            ?>
            <tr>
                <th><?=$n?></th>
                <td><?= $row['pname']?></td>
                <td><?= $row['quantity']?></td>
                <td><?= $row['date']?></td>

            </tr>
            <?php
        }
        
        
        ?>
    </table>
    <?php
    }else{
        echo "";
    }
    ?>
</body>
</html>