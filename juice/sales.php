<?php
include('conn.php');

$pid = $_POST['pid'];
$cid = $_POST['cid'];
$qty = $_POST['qty'];
$date = $_POST['date'];
$price = $_POST['price'];

$select = "SELECT * from customers where cid = '$cid'";
$exec = mysqli_query($xonn,$select);
$row = mysqli_fetch_assoc($exec);

if($row['credit']>$price){
    
$insert = "INSERT into sales(pid,cid,quantity,date,price) values ('$pid','$cid','$qty','$date','$price')";
$run = mysqli_query($xonn,$insert);

if($run){
    echo "<script>
        alert('Sale Recorded');
        window.location.href='worker.php';
    </script>";
}
}else{
    echo "<script>
        alert('Insuficient Balance');
        window.location.href='worker.php';
    </script>";
}



?>