<?php
include('xonn.php');

$names = $_POST['names'];
$address = $_POST['address'];
$sex = $_POST['gender'];
$hobby = $_POST['hobby'];

$hobbies = implode(", ",$hobby);

$insert = "INSERT into validate (names,address,sex,hobby) values ('$names','$address','$sex','$hobbies')";
$sql = mysqli_query($xonn,$insert);

if($sql){
    echo "<script>
    alert('Values Inserted');
    window.location.href='display.php';
    </script>";
}else{
    
    echo "<script>
    alert('Values Not Inserted');
    window.location.href='form.php';
    </script>";
}

?>