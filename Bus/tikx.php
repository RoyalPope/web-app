<?php
include("conn.php");

$client = $_POST['name'];
$bus = $_POST['bus'];
$des = $_POST['des'];

$select = "SELECT amount from chaste where cyusa_id = '$client'";
$ini = mysqli_query($conn,$select);
$amt = mysqli_fetch_assoc($ini);

$fetch = "SELECT Price from destionation where did = '$des'";
$fet = mysqli_query($conn,$fetch);
$price = mysqli_fetch_assoc($fet);

$tot = $amt['amount'] - $price['Price'];

$update = "UPDATE chaste set amount = '$tot' where cyusa_id = '$client'";
$up = mysqli_query($conn,$update);

$insert = "INSERT into ticket (cyusa_id,bid,did) values ('$client','$bus','$des')";
$sql = mysqli_query($conn,$insert);

$upbus= "UPDATE bus set nseats = nseats - 1 where bid = '$bus'";
$upb = mysqli_query($conn,$upbus);


if ($sql) {
    echo "<script>alert('Inserted')</script>";
    include_once("tik.php");
}else{
    echo "<script>alert('Not Inserted')</script>";
    include_once("tik.php");
}
?>