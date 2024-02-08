<?php
include ("conn.php");

$pro = $_POST['product'];
$qty = $_POST['qty'];
$price = $_POST['cost'];
$cust = $_POST['customer'];
$date = $_POST['date'];

$insert = "INSERT into productout (ProductCode,date,quantity,UnitPrice,customer_id) values ('$pro','$date','$qty','$price','$cust')";
$sql = mysqli_query($conn,$insert);

if($sql){
    echo "<script>window.alert('Done')</script>";
}else{
    echo "<b>Error_250: System Down by The Terminator</b>";
}
?>