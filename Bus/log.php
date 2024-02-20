<?php
include("conn.php");

$uname = $_POST['usname'];
$pass = $_POST['passw'];

$fetch = "SELECT uname,password from busers";
$sql = mysqli_query($conn,$fetch);

while($row = mysqli_fetch_assoc($sql)) {
    if($uname == $row['uname'] && $pass == $row['password'] ){
        echo "<script>alert('Welcome Back')</script>";
        include_once ("cyusa.php");
        exit();
    }
}

echo "<script>alert('Invalid Username or Password')</script>";
include_once ("index.php");
?>
