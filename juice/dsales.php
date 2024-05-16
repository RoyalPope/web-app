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
            <th>Product</th>
            <th>Customer</th>
            <th>Quantity</th>
            <th>Date</th>
            <th>Price</th>
        </tr>
        <?php
        include('conn.php');

        $n = 0;

        $select = "SELECT products.pname,customers.cname,sales.quantity,sales.date,sales.price FROM sales 
        INNER JOIN products ON sales.pid = products.pid 
        INNER JOIN customers ON customers.cid = sales.cid";

        $run = mysqli_query($xonn,$select);
        while($row=mysqli_fetch_assoc($run)){
            $n++;
        ?>
            <tr>
            <th><?=$n?></th>
            <td><?=$row['pname']?></td>
            <td><?=$row['cname']?></td>
            <td><?=$row['quantity']?></td>
            <td><?=$row['date']?></td>
            <td><?=$row['price']?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>