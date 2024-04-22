<?php
include('xonn.php');

$add = $_POST['subject'];
$cid = $_POST['cid'];

$insert = "INSERT into subject values ('','$add','$cid')";
$sql = mysqli_query($xonn,$insert);

if($sql){
    echo "<script>
        alert('Inserted Successfully')
        window.location.href ='subject.php';
    </script>";
}


?>