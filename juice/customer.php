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
    <table border=1>
    <tr>
        <th>No</th>
        <th>Cname</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Credit</th>
    </tr>
    <?php
    include('conn.php');

    $n = 0;
    $select = "SELECT * from customers";
    $run = mysqli_query($xonn,$select);

    while($row=mysqli_fetch_assoc($run)){
        $n++;
        ?>
        <tr>
        <th><?= $n?></th>
        <td><?=$row['cname']?></td>
        <td><?=$row['address']?></td>
        <td><?=$row['phone']?></td>
        <td><?=$row['credit']?></td>
        </tr>
        <?php
    }
    ?>
    <tr>
        <td colspan="5"><a href="newc.php"><button>&plus; Add Customer</button></a></td>
    </tr>
    </table>
</body>
</html>