<?php
session_start();

if(!isset($_SESSION['uname'])){
    echo "<script>
    alert('access denied');
    window.location.href='login.php';
    </script>";
    return;
}
if($_SESSION['type'] != 'client'){
    echo "<script>
    alert('Restricted Access');
    window.location.href='login.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_SESSION['name'];
    echo $_SESSION['uname'];
    echo $_SESSION['type'];
    ?>
    <a href="out.php">log out</a>
</body>
</html>