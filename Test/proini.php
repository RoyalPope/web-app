<?php
include ("conn.php");

$code = $_POST['product'];
$qty = $_POST['qty'];
$price = $_POST['cost'];
$date = $_POST['date'];

$insert = "INSERT into productin (ProductCode,date,quantity,UnitPrice) values ('$code','$date','$qty','$price')";
$sql = mysqli_query($conn,$insert);

if($sql){
    echo "<script>window.alert('Done')</script>";
}else{
    echo "<b>Error_250: System Down by The Terminator</b>";
}
?>