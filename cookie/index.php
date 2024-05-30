<?php
$name = 'pope';
$value = 'good';

setcookie($name,$value,time()+(86400 * 30),'/');

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
    if(!isset($_COOKIE[$name])){
        echo "cookie $name not set";
    }else{
        echo "value $_COOKIE[$name]";
    }
    
    ?>
    <form action="" method="post">
    <input type="text" name="new">
    <input type="submit" name="submit" value="cookie">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $cookie = $_POST['new'];

    }
    ?>
</body>
</html>