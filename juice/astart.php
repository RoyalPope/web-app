<?php
session_start();

if(!(isset($_SESSION['user']))){
    echo "<script>
        alert('Log In');
        window.location.href='index.php';
    </script>";
}

?>