<?php
include("conn.php");

$bus = $_POST['bus'];
$from = $_POST['from'];
$to = $_POST['to'];
$cost = $_POST['cost'];

$insert = "INSERT into destionation (bid,Froms,Tod,Price) values('$bus','$from','$to','$cost')";
$sql = mysqli_query($conn,$insert);

if ($sql) {
    echo "<script>alert('Inserted')</script>";
    include_once("dest.php");
}else{
    echo "<script>alert('Not Inserted')</script>";
    include_once("dest.php");
}
?>