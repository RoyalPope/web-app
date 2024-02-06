<?php
include ("conn.php");
include ("address.php");

$student = $_POST['drop'];
$distr = $_POST['dropdown'];
$sector = $_POST['sector'];
$cell = $_POST['cell'];

$insert = "INSERT into address (Std_id,District,Sector,Cell) values ('$student','$distr','$sector','$cell')";
$sql = mysqli_query($conn,$insert);

if($sql){
    echo "<script>window.alert('Registered Successfully')</script>";
}else{
    echo "<b>Error_250: System Down by The Terminator</b>";
}
?>