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
    button {
  padding: 10px 20px;
  background-color: #723b83;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
    }

    button:hover {
  background-color: #411a4d;
    }
    @media print{
        .nav *{
            display: none;
        }
    }
</style>
</head>
<body>
    <table>
        <tr>
            <td>Product Name</td>
            <td>Date</td>
            <td>Quantity</td>
            <td>Unit Price</td>
            <td>Customer Name</td>
            <td>Total Price</td>
        </tr>
        <?php
include ("conn.php");
?>
<div class="nav">
<?php
include ("home.html");
?>
</div>
<?php
$product = $_POST['product'];
$start = $_POST['start'];
$end = $_POST['end'];
$x=0;

$select = "SELECT ProductName from product where ProductCode = '$product'";
$run = mysqli_query($conn,$select);
$while = mysqli_fetch_assoc($run);
?>
<br>
<h1><center>Report for <?php echo $while['ProductName']?></center></h1><br>
<?php

$fetch = "SELECT ProductCode,date,quantity,UnitPrice,customer_id from productout where ProductCode = '$product' AND date BETWEEN '$start' AND '$end'";
$sql = mysqli_query($conn,$fetch);

while($row = mysqli_fetch_assoc($sql)){
$cus = "SELECT concat(Fname,' ',Lname) as names from customer where customer_id='".$row['customer_id']."' ";
$cus1 = mysqli_query($conn,$cus);
$exe = mysqli_fetch_assoc($cus1);
?>
    <tr>
        <td><?php echo $while['ProductName']?></td>
        <td><?php echo $row['date']?></td>
        <td><?php echo $row['quantity']?></td>
        <td><?php echo $row['UnitPrice']?></td>
        <td><?php echo $exe['names']?></td>
        <td><?php $tot = $row['quantity']*$row['UnitPrice'];echo $tot?></td>
    </tr>
    <?php
    $x = $x + $tot;
}
?>

    <tr>
        <td colspan = 2><center><b>Totals</b></center></td>
        <td><?php
            $sum = "SELECT sum(quantity) as sum from productout where ProductCode = '$product'";
            $sue = mysqli_query($conn,$sum);
            $suf = mysqli_fetch_assoc($sue);

            echo "Sum: " .$suf['sum']; 
            ?></td>
        <td><?php
            $avg = "SELECT round(avg(UnitPrice),0) as avg from productout where ProductCode = '$product'";
            $avge= mysqli_query($conn,$avg);
            $avgf= mysqli_fetch_assoc($avge);

            echo "Average: " .$avgf['avg'];
        ?></td>
        <td></td>
        <td>
        <?php
            echo "Total : " .$x;
        ?>  
        </td></tr>
    </table><br>
    <div class="nav">
   <center><button onclick="window.print()">Print Report</button></center>
   </div>
</body>
</html>