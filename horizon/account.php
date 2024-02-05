<?php
include ('conn.php');
include ("index.html");
$code = $_POST['code'];
$amt = $_POST['amt'];

$insert = "INSERT into account(customer_code,amount_paid) values('$code','$amt')";

$result = mysqli_query($conn,$insert);

if ($result) {
    echo "<script>window.alert('Done')</script>";

}else {
    echo "Error";
}
?>