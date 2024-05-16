<?php
include('conn.php');

$cname = $_POST['cname'];
$address = $_POST['address'];
$phone = $_POST['tel'];
$credit = $_POST['credit'];

$insert = "INSERT into customers (cname,address,phone,credit) values ('$cname','$address','$phone','$credit')";
$run = mysqli_query($xonn,$insert);

if($run){
    echo "<script>
        alert('Customer Inserted');
        window.location.href='customer.php';
    </script>";
}



?>