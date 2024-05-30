<?php
session_start();
$_SESSION['name']=array();
$_SESSION['uname']=array();
$_SESSION['type']=array();
session_destroy();
echo "<script>
    alert('Out');
    window.location.href='login.php';
    </script>";

?>