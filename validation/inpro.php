<?php
include('xonn.php');

$pname = $_POST['pname'];

$insert = "INSERT into product values ('','$pname')";
$sql = mysqli_query($xonn,$insert);

if($sql){
    echo "<script>
    alert('Product Registered');
    window.location.href='product.php';
    </script>";
}else{
    echo "<script>
    alert('Product Not Registered');
    window.location.href='product.php';
    </script>";
}

?>