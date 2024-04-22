<?php
include("conn.php");

$user = $_POST['username'];
$pass = $_POST['pass'];
$type = $_POST['type'];

$insert = "INSERT into users (username,password,userType) values ('$user','$pass','$type')";
$sql = mysqli_query($conn,$insert);

if ($sql) {
    echo "<script>alert('Account Created')</script>";
    header("Location: index.php");
}else{
    echo "<script>alert('Re-enter credentials')</script>";
    header("Location: signup.php");
}

?>