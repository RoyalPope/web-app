<?php
include('conn.php');
$name=$_POST["name"];
$bus=$_POST["bname"];
$dest=$_POST["dest"];
$date=$_POST["date"];
$insert="INSERT INTO ticket (firstnameid,bid,did,date) values('$name','$bus','$dest','$date')";
$execute= mysqli_query($con,$insert);
if($execute){
    $message="Done";
    $redirect="nav.php";
}else{
    $message="failed";
    $redirect="ticket.php";
}
echo "<script>alert('$message')</script>";
echo "<script> window.location.href='$redirect';</script>";
exit();
?>