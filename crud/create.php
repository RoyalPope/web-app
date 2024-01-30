<?php
include("conn.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$insert = mysqli_query($conn, "INSERT into list(fname,lname) values ('$fname','$lname')");

if($insert){
    header("location: retrive.php");
}else{
    echo "nah";
}
?>