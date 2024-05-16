<?php
include('conn.php');

$id = $_GET['id'];


$delete = "DELETE from products where pid='$id'";
$run = mysqli_query($xonn,$delete);

if($run){
    echo "<script>
        alert('Product Deleted');
        window.location.href='product.php';
    </script>";
}




?>