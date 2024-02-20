<?php
include("conn.php");

$names = $_POST['names'];
$location = $_POST['location'];
$tel = $_POST['phone'];

$insert = "INSERT into cyusa (Name,Address,Phone) values('$names','$location','$tel')";
$sql = mysqli_query($conn,$insert);

if ($sql) {
    echo "<script>alert('Inserted')</script>";
    include_once("cyusa.php");
}else{
    echo "<script>alert('Not Inserted')</script>";
    include_once("cyusa.php");
}
?>