<?php
include ("conn.php");

$names = $_POST['names'];
$user = $_POST['user'];
$pass = md5($_POST['pass']);
$type = $_POST['type'];

$select = "SELECT Username from users";
$sql = mysqli_query($conn,$select);

while($row = mysqli_fetch_assoc($sql)){
if($user == $row['Username']){
    echo "<script>alert('Username Taken')</script>";
    include_once ("signup.html");
    exit();
}
}
    $insert = "INSERT into users (Names,Username,Password,User_type) 
    values ('$names','$user','$pass','$type')";
    $res = mysqli_query($conn,$insert);
    if($res){   
    echo "<script>alert('Welcome')</script>";
    include_once ("product2.php");
}else{
    echo "<script>alert('Error')</script>";
    include_once ("signup.html");
}

?>