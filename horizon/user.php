<?php
include ("conn.php");
include ("index.html");
$username = $_POST['username'];
$pass = $_POST['pass'];
$drop = $_POST['drop'];

$insert = "INSERT into users(user_name,password,user_type) values ('$username','$pass','$drop')";
$result = mysqli_query($conn,$insert);

if ($result) {
    echo "<script>window.alert('Done')</script>";
}else {
    echo "error";
}
?>