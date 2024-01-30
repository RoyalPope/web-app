<?php
include("conn.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$date = $_POST['date'];

$insert = mysqli_query($conn, "INSERT into student(fname,lname,email,reg_date) 
values ('$fname','$lname','$email','$date')");

if ($insert) {
    echo "good";
}else {
    echo "booo";
}
?>