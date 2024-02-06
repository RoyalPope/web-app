<?php
include ("conn.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$tel = $_POST['tel'];
$place = $_POST['place'];

$insert = "INSERT into customer (Fname,Lname,Age,Phone,Location) values ('$fname','$lname','$age','$tel','$place')";
$sql = mysqli_query($conn,$insert);

if($sql){
    echo "<script>window.alert('Done')</script>";
}else{
    echo "<b>Error_250: System Down by The Terminator</b>";
}
?>