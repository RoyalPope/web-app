<?php
include("conn.php");

$plate = $_POST['plate'];
$seats = $_POST['seats'];

$insert = "INSERT into bus(bname,nseats) values('$plate','$seats')";
$sql = mysqli_query($conn,$insert);

if ($sql) {
    echo "<script>alert('Inserted')</script>";
    include_once("bus.php");
}else{
    echo "<script>alert('Not Inserted')</script>";
    include_once("bus.php");
}
?>