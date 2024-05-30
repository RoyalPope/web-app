<?php
session_start();

if(!isset($_SESSION['uname'])){
    echo "<script>
    alert('Log In');
    window.location.href='login.php';
    </script>";
}

?>