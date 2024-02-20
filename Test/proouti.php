<?php
include ("conn.php");

$pro = $_POST['product'];
$qty = $_POST['qty'];
$price = $_POST['cost'];
$cust = $_POST['customer'];
$date = $_POST['date'];

$insert = "INSERT into productout (ProductCode,date,quantity,UnitPrice,customer_id) values ('$pro','$date','$qty','$price','$cust')";
$update = "UPDATE productin set quantity = quantity - $qty where ProductCode = '$pro' ";
$sql = mysqli_query($conn,$insert);
$exe = mysqli_query($conn,$update);


if($sql){
    echo "<script>window.alert('Done')</script>";
}else{
    echo "<b>Error_250: System Down by The Terminator</b>";
}
?>