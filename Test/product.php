<?php
include ("conn.php");

$code = $_POST['code'];
$name = $_POST['name'];

$insert = "INSERT into product (ProductCode,ProductName) values ('$code','$name')";
$sql = mysqli_query($conn,$insert);

if($sql){
    echo "<script>window.alert('Done')</script>";
}else{
    echo "<b>Error_250: System Down by The Terminator</b>";
}

?>