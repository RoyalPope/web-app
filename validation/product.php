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
<?php
    include('nav.php');
    ?>
    <a href="out.php">log out</a>
    <form action="inpro.php" method="post">
        Pname : <input type="text" name="pname">
        <input type="submit" value="submit">
    </form>
</body>
</html>