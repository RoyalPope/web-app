<?php
include('xonn.php');

$add = $_POST['district'];

$insert = "INSERT into address values ('','$add')";
$sql = mysqli_query($xonn,$insert);

if($sql){
    echo "<script>
        alert('Inserted Successfully')
        window.location.href ='address.php';
    </script>";
}


?>