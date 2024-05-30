<?php
include('astart.php');
if($_SESSION['type'] != 'manager'){
    echo "<script>
    alert('Access Denied');
    window.location.href='stout.php';
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
    <form action="new.php" method="post">
        NAMES: <input type="text" name="name"><br><br>
        USERNAME: <input type="text" name="uname"><br><br>
        USER-TYPE: <input type="text" name="type"><br><br>
        PASSWORD: <input type="password" name="pass"><br><br>
        Re-type PASSWORD: <input type="password" name="repass"><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>