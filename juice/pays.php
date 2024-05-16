<?php
include('conn.php');

$cid = $_POST['cid'];
$price = $_POST['price'];
$date = $_POST['date'];


$select = "SELECT * from customers where cid = '$cid'";
$exec = mysqli_query($xonn,$select);
$row = mysqli_fetch_assoc($exec);

$newCredit = $row['credit']-$price;

$update = "UPDATE customers set credit = '$newCredit' where cid ='$cid'";
$sql = mysqli_query($xonn,$update);

if($sql){

$insert = "INSERT into payments(cid,amount,date) values ('$cid','$price','$date')";
$run = mysqli_query($xonn,$insert);

if ($run) {
    echo "<script>
        alert('Good');
        window.location.href='payments.php';
    </script>";
}

}else{
    echo "<script>
        alert('Error at Update');
        window.location.href='payments.php';
    </script>";
}


?>