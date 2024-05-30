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
<?php
    include('nav.php');
    ?>
    <table border=1>
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Buy Price</th>
            <th>Sell Price</th>
            <th>Action</th>
        </tr>
        <?php
        include('conn.php');

        $n=0;

        $select = "SELECT * from products";
        $run = mysqli_query($xonn,$select);

        while($row=mysqli_fetch_assoc($run)){
            $n++;
            ?>
            <tr>
                <th><?= $n?></th>
                <td><?=$row['pname']?></td>
                <td><?=$row['bprice']?></td>
                <td><?=$row['sprice']?></td>
                <td>
                    <a href="delete.php?id=<?=$row['pid']?>">Delete</a>
                    <a href="update.php?id=<?=$row['pid']?>">Update</a>
                </td>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td colspan="5"><a href="newp.php"><button>&plus; Add Product</button></a></td>
        </tr>
    </table>
</body>
</html>