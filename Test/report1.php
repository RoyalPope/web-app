<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    table {
        width: 80%;
        border-collapse: collapse;
        margin: 0 auto;
    }
    th, td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>
    <table>
        <tr>
            <td>Product Code</td>
            <td>Date</td>
            <td>Quantity</td>
            <td>Unit Price</td>
            <td>Customer Id</td>
            <td>Total Price</td>
        </tr>
        <?php
include ("conn.php");
include ("home.html");
$start = $_POST['start'];
$end = $_POST['end'];

$fetch = "SELECT ProductCode,date,quantity,UnitPrice,customer_id from productout where date BETWEEN '$start' AND '$end'";
$sql = mysqli_query($conn,$fetch);

while($row = mysqli_fetch_assoc($sql)){
?>
    <tr>
        <td><?php echo $row['ProductCode']?></td>
        <td><?php echo $row['date']?></td>
        <td><?php echo $row['quantity']?></td>
        <td><?php echo $row['UnitPrice']?></td>
        <td><?php echo $row['customer_id']?></td>
        <td><?php $tot = $row['quantity']*$row['UnitPrice'];echo $tot?></td>
    </tr>
<?php
}
?>

    </table>
</body>
</html>