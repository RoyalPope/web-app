<?php
include('conn.php');

$pname = $_POST['pname'];
$bprice = $_POST['bprice'];
$sprice = $_POST['sprice'];


$insert = "INSERT into products (pname,bprice,sprice) values('$pname','$bprice','$sprice')";
$sql = mysqli_query($xonn,$insert);


if($sql){
    echo "<script>
        alert('Product Inserted');
        window.location.href='product.php';
    </script>";
}

?>