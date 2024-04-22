<?php
$conn = mysqli_connect('localhost','root','','school');

$a = $_POST['1'];
$b = $_POST['2'];
$c = $_POST['3'];
$d = $_POST['4'];
$e = $_POST['5'];
$f = $_POST['6'];
$g = $_POST['7'];
$h = $_POST['8'];
$i = $_POST['9'];
$j = $_POST['10'];


$insert = "INSERT into employee values('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
$exec = mysqli_query($conn,$insert);


?>