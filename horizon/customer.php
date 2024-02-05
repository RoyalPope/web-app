<?php
include ("conn.php");
include ("index.html");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['tel'];
$code = $_POST['code'];

$insert = "INSERT into customer (first_name,last_name,phone_number,customer_code)
 values ('$fname','$lname','$phone','$code')";

$result = mysqli_query($conn,$insert);

if ($result) {
    echo "<script>window.alert('Done')</script>";
}else {
    echo "Error";
}
?>