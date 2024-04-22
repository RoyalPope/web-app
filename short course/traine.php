<?php
include("conn.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$tel = $_POST['tel'];

$insert = "INSERT into trainees (firstName,lastName,gender,telephone) value ('$fname','$lname','$gender','$tel')";
$sql = mysqli_query($conn,$insert);

if($sql){
    echo  "<script>alert('Inserted')</script>";
    header("Location: trainee.php");
}else{
    echo "<script>alert('Erro')</script>";
}

?>