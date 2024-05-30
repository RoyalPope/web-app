<?php
include('xonn.php');

$pid = $_POST['pid'];
$qty = $_POST['qty'];

if(empty($pid)){
    echo "<script>
    alert('Choose Product');
    window.location.href='stoin.php';
    </script>";
}else{
    $insert = "INSERT into stockin (pid,quantity)values ('$pid','$qty')";
$exec = mysqli_query($xonn,$insert);

if($exec){
    echo "<script>
    alert('Product Stocked In');
    window.location.href='stoin.php';
    </script>";
}else{
    echo "<script>
    alert('Product Not Stocked In');
    window.location.href='stoin.php';
    </script>";
}
}



?>