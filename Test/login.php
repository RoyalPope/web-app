<?php
include ("conn.php");

$username = $_POST['username'];
$pass = md5($_POST['pass']);

$fetch = "SELECT Username,Password from users";
$sql = mysqli_query($conn,$fetch);

while($row = mysqli_fetch_assoc($sql)){
if($username == $row['Username'] && $pass == $row['Password']){
    echo "<script>alert('Logged In')</script>";
    include_once ("product2.php");
    exit();
}
}
echo "<script>alert('Invalid Username or Password')</script>";
include_once ("index.php");
?>