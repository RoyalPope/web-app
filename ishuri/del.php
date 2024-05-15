<?php
include('xonn.php');

$id = $_GET['delid'];

$del = "DELETE from student where stdid = $id";
$sql = mysqli_query($xonn,$del);

if($sql){
    echo "<script>
        alert('Deleted Successfully')
        window.location.href ='report.php';
    </script>";
}



?>