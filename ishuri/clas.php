<?php
include('xonn.php');

$add = $_POST['class'];

$insert = "INSERT into class values ('','$add')";
$sql = mysqli_query($xonn,$insert);

if($sql){
    echo "<script>
        alert('Inserted Successfully')
        window.location.href ='class.php';
    </script>";
}


?>