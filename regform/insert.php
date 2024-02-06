<?php
include("conn.php");
include ("fetch.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$date = $_POST['date'];

$insert = "INSERT into student(fname,lname,email,reg_date) 
values ('$fname','$lname','$email','$date')";

$result = mysqli_query($conn,$insert);

if ($result) {
    echo "good";
}else {
    echo "booo";
}
?>