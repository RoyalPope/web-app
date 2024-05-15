<?php
include('conn.php');
$name= $_POST["name"];
$phone= $_POST["phone"];
$select="SELECT Names,Phone from first_name";
$execute=mysqli_query($con,$select);
 while($row=mysqli_fetch_assoc($execute)){
    if($name == $row['Names'] && $phone==$row['Phone']){
        echo "<script> alert('Welcome back')</script>";
        header("location: nav.php");
        exit();
    }else{
        echo "<script> alert('Oops try again')</script>";
        header("location: login.php");

    }
 }
?>