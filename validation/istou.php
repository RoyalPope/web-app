<?php
include('xonn.php');

$pid = $_POST['pid'];
$qty = $_POST['qty'];


if(empty($pid)){
    echo "<script>
    alert('Choose Product');
    window.location.href='stout.php';
    </script>";
}else{

$select = "SELECT * from stockin where pid = '$pid'";
$run = mysqli_query($xonn,$select);
$row = mysqli_fetch_assoc($run);

if($row['quantity']>$qty){

$newQty = $row['quantity'] - $qty;

$update = "UPDATE stockin set quantity = '$newQty' where pid = '$pid'";
$sql = mysqli_query($xonn,$update);

if($sql){


$insert = "INSERT into stockout (pid,quantity)values ('$pid','$qty')";
$exec = mysqli_query($xonn,$insert);

if($exec){
    echo "<script>
    alert('Product Stocked Out');
    window.location.href='stout.php';
    </script>";
}else{
    echo "<script>
    alert('Product Not Stocked Out');
    window.location.href='stout.php';
    </script>";
}
}else{
    echo "<script>
    alert('Unable To Update');
    window.location.href='stout.php';
    </script>";
}
}else{
    echo "<script>
    alert('Low Quantity Left');
    window.location.href='stout.php';
    </script>";
}}
?>