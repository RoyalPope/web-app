<?php
include ("conn.php");
include ("index.html");
$origin = $_POST['origin'];
$dest = $_POST['dest'];
$amt = $_POST['amt'];
$time = $_POST['hr'];

$insert = "INSERT into busline(origin,destination,payment_amount,departure_time) values('$origin','$dest','$amt','$time')";

$result = mysqli_query($conn,$insert);

if ($result) {
    echo "<script>window.alert('Done')</script>";

}else {
    echo "Error";
}
?>