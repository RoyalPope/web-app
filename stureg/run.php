<?php
include("conn.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$date = $_POST['date'];
$drop = $_POST['dropdown'];
$cbox = $_POST['sport'];
$sex = $_POST['sex'];
$img = $_POST['img'];

$dir = "images/";
$fileN = $_FILES['img']['name'];
$fileTmp = $_FILES['img']['tmp_name'];
$fileT = $dir . basename($fileN);
move_uploaded_file($fileTmp,$fileT);
// $dir = "images/";
// $file = $dir . ($_FILES['img']['name']);
// move_uploaded_file($_FILES['img']['tmp_name'],$file);

$insert = "INSERT into registraion(fname,lname,dob,district,sports,gender,image) 
values ('$fname','$lname','$date','$drop','$cbox','$sex','$img')";

$result = mysqli_query($conn,$insert);

    if($result){
        echo "<script>window.alert('Done')</script>";
    }else{
        echo "<b>Error_250: System Down by The Terminator</b>";
    }

?>