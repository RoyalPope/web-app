<?php
include("conn.php");

$id = $_POST['user'];
$amt = $_POST['amt'];

$insert = "INSERT into chaste(cyusa_id,amount) values('$id','$amt')";
$sql = mysqli_query($conn,$insert);

if ($sql) {
    echo "<script>alert('Inserted')</script>";
    include_once("chaste.php");
}else{
    echo "<script>alert('Not Inserted')</script>";
    include_once("chaste.php");
}
?>