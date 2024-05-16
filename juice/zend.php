<?php
session_start();
$_SESSION['user']=array();
session_destroy();

echo "<script>
        alert('Out');
        window.location.href='index.php';
    </script>";
?>