<?php
include('conn.php');
$bus=$_POST['bus'];
$from=$_POST['from'];
$to=$_POST['to'];
$price=$_POST['price'];
$insert="INSERT INTO destination(bid,fro_m,t_o,price) values('$bus','$from','$to','$price')";
$execute=mysqli_query($con,$insert);
if($execute){
    $message="Done";
    $redirect="ticket.php";
}else{
    $message="failed";
    $redirect="destination.php";
}
echo "<script>alert('$message')</script>";
echo "<script>window.location.href='$redirect'</script>";
exit();
?>