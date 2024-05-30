<?php
include('xonn.php');

$names = $_POST['name'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
$utype = $_POST['type'];

$select = "SELECT * from users where username = '$uname'";
$exec = mysqli_query($xonn,$select);


if(mysqli_num_rows($exec)>0){
    echo "<script>
    alert('username taken');
    window.location.href='user.php';
    </script>";
}else{

if($pass != $repass){
    echo "<script>
    alert('pass dont match');
    window.location.href='user.php';
    </script>";
}else{

$insert = "INSERT into users values ('','$names','$uname','$pass','$utype')";
$sql = mysqli_query($xonn,$insert);

if($sql){
    echo "<script>
    alert('Values Inserted');
    window.location.href='user.php';
    </script>";
}else{
    
    echo "<script>
    alert('Values Not Inserted');
    window.location.href='user.php';
    </script>";
}
}
}
?>