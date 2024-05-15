<?php
include('conn.php');
$lname=$_POST["name"];
$address=$_POST["add"];
$phone=$_POST["phone"];
$insert="INSERT INTO first_name(Names,Address,phone) values ('$lname','$address','$phone')";
$execute=mysqli_query($con,$insert);
if($execute){
    echo "<script>window.alert ('Inserted successfuly')</script>";
    header("location: login.php");
    exit();
    
}
    else{
        echo "<script>window.alert ('Not Inserted')</script>";
        header("location: signup.php");
        exit();
    }
?>