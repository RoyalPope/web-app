<?php
include('xonn.php');
$id = $_GET['id'];
$del = "DELETE from stockin where inId=$id";
$sql = mysqli_query($xonn,$del);

if($sql){
    echo "<script>
    alert('Product Deleted');
    window.location.href='dpro.php';
    </script>";
}else{
    
    echo "<script>
    alert('Product Not Deleted');
    window.location.href='dpro.php';
    </script>";
}




?>