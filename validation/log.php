<?php
session_start();
include('xonn.php');

$uname = $_POST['uname'];
$pass = $_POST['pass'];




$select = "SELECT * from users where username = '$uname' and password = '$pass'";
$exec = mysqli_query($xonn,$select);
$row = mysqli_fetch_assoc($exec);


if(mysqli_num_rows($exec)>0){
    $_SESSION['name'] = $row['Names'];
    $_SESSION['uname'] = $row['Username'];
    $type = $_SESSION['type'] = $row['userType'];
if($type == 'manager'){
    echo "<script>
    alert('Welcome manager');
    window.location.href='product.php';
    </script>";
}elseif($type == 'cashier'){
    echo "<script>
    alert('Welcome cashier');
    window.location.href='stout.php';
    </script>";
}else{
    echo "<script>
    alert('error');
    window.location.href='login.php';
    </script>";
}
}else{
    echo "<script>
    alert('invalid creds');
    window.location.href='login.php';
    </script>";
}




?>