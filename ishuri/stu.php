<?php
include('xonn.php');

$add = $_POST['student'];
$aid = $_POST['aid'];
$sid = $_POST['sid'];

$insert = "INSERT into student values ('','$add','$aid','$sid')";
$sql = mysqli_query($xonn,$insert);

if($sql){
    echo "<script>
        alert('Inserted Successfully')
        window.location.href ='student.php';
    </script>";
}


?>