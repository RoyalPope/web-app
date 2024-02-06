<?php
include ("conn.php");

$pro = $_POST['product'];
$qty = $_POST['qty'];
$price = $_POST['cost'];
$cust = $_POST['customer'];

$insert = "INSERT into productout (ProductCode,quantity,UnitPrice,customer_id) values ('$pro','$qty','$price','$cust')";
$sql = mysqli_query($conn,$insert);

if($sql){
    echo "<script>window.alert('Done')</script>";
}else{
    echo "<b>Error_250: System Down by The Terminator</b>";
}
?>