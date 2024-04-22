<?php
include("conn.php");

$trainee = $_POST['trainee'];
$module = $_POST['module'];
$assess = $_POST['assess'];
$exam = $_POST['exam'];

$insert = "INSERT into marks (traineeId,moduleCode,assessMarks,examMarks) 
values ('$trainee','$module','$assess','$exam')";
$sqli = mysqli_query($conn,$insert);

if($sqli){
    header("Location: marks.php");
}else{
    echo "error";
}
?>