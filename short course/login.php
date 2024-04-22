<?php
session_start();
include("conn.php");

$user = $_POST['username'];
$pass = $_POST['pass'];

$select = "SELECT * from users";
$sql = mysqli_query($conn,$select);

while($row = mysqli_fetch_assoc($sql)){
    if($user == $row['username'] && $pass == $row['password']){
        $_SESSION['user'] = $user;
        echo "<script>alert('Welcome back')</script>";
        header("Location: home.php");
        exit(); 
    }
}

// --------------------------------------------------------------------------

$fetch = "SELECT * from trainees";
$query = mysqli_query($conn,$fetch);

while($col = mysqli_fetch_assoc($query)){
    if($user == $col['traineeId'] && $pass == $col['lastName']){
        $_SESSION['user'] = $user;
        echo "<script>alert('Welcome back')</script>";
        header("Location: home2.php");
        exit();
    }
}
header("Location: index.php");
?>