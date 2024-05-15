<?php
include('conn.php');
$bus = $_POST["bus"];
$seats = $_POST["seat"];
$insert = "INSERT INTO bus (bname, Nseats) VALUES ('$bus', '$seats')";
$execute = mysqli_query($con, $insert);

if ($execute) {
    $message = "Done";
    $redirect = "destination.php";
} else {
    $message = "Failed";
    $redirect = "bus.php";
}

echo "<script>alert('$message');</script>";
echo "<script>window.location.href='$redirect';</script>";
exit();
?>
