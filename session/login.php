<?php
session_start();

include("conn.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

$fetch = "SELECT uname,password from busers";
$sql = mysqli_query($conn,$fetch);

while($row = mysqli_fetch_assoc($sql)){
    if($user == $row['uname'] && $pass == $row['password']){
        $_SESSION['user'] = $user;
        header("Location: home.php");
        exit();
    }
}

echo "<script>alert('Invalid Credentials')</script>";
include("index.php");

?>