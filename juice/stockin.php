<?php
include('conn.php');

$pid = $_POST['pid'];
$qty = $_POST['qty'];
$date = $_POST['date'];

$insert = "INSERT into stockin values('$pid','$qty','$date')";
$run = mysqli_query($xonn,$insert);

if($run){
    echo "<script>
        alert('Product Instockee');
        window.location.href='stock.php';
    </script>";
}


?>