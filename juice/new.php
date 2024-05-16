<?php
include('conn.php');

$uname = $_POST['uname'];
$pass = sha1($_POST['pass']);
$type = $_POST['type'];


$insert = "INSERT into users (username,password,usertype) values ('$uname','$pass','$type')";
$run = mysqli_query($xonn,$insert);

if($run){
    echo "<script>
        alert('Account Created');
        window.location.href='index.php';
    </script>";
}

?>