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
    <table border=1 cellspacing=0>
        <tr>
        <th>No</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Date</th>
        <th>Action</th>
        </tr>
        <?php
        include('xonn.php');

        $n = 0;
        $select = "SELECT stockin.inId, product.pid, product.pname, stockin.quantity, stockin.date from stockin 
        inner join product on stockin.pid=product.pid";
        $sql = mysqli_query($xonn,$select);

        while($row = mysqli_fetch_assoc($sql)){
            $n++;
            ?>
            <tr>
                <th><?=$n?></th>
                <td><?= $row['pname']?></td>
                <td><?= $row['quantity']?></td>
                <td><?= $row['date']?></td>
                <td>
                    <a href="delete.php?id='<?=$row['inId']?>'">DELETE</a>
                    <a href="upro.php?id='<?=$row['inId']?>'">UPDATE</a>
                </td>

            </tr>
            <?php
        }
        
        
        ?>
    </table>
</body>
</html>