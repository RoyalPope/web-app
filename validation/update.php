<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    include('xonn.php');

    $id = $_GET['id'];

    $select = "SELECT * from validate where id=$id";
    $sql = mysqli_query($xonn,$select);
    $row = mysqli_fetch_assoc($sql);
    $gen = $row['Sex'];
    $hobs = $row['Hobby'];
    ?>
    <fieldset>
        <legend><a href="display.php">DATA VALIDATION</a></legend>
    <form action="" method="post">
        <input type="text" name="names" placeholder="FULL NAMES" value="<?=$row['Names']?>"><br><br>
        <input type="text" name="address" placeholder="ADDRESS" value="<?=$row['Address']?>"><br><br>
        Sex: <input type="radio" name="gender" value="female"<?=($gen== 'female') ?  "checked" : "" ;  ?>> F
        <input type="radio" name="gender" value="male"<?=($gen== 'male') ?  "checked" : "" ;  ?>> M <br><br>
        Hobies:
        <input type="checkbox" name="hobby[]" value="cooking" <?= (strpos($hobs, "cooking") == "")? "":"checked" ;?>> Cooking<br><br>
        <div class="checks">
        <input type="checkbox" name="hobby[]" value="pray"<?= (strpos($hobs, "pray") == "")? "":"checked" ;?>> Pray<br><br>
        <input type="checkbox" name="hobby[]" value="swimming"<?= (strpos($hobs, "swimming") == "")? "":"checked" ;?>> Swimming<br><br>
        <input type="checkbox" name="hobby[]" value="play"<?= (strpos($hobs, "play") == "")? "":"checked" ;?>> Play<br><br>
        </div>
        <input type="submit" value="Save Data" name="up"><br><br>
    </form>
    </fieldset>
    <?php
    if(isset($_POST['up'])){
        $names = $_POST['names'];
$address = $_POST['address'];
$sex = $_POST['gender'];
$hobby = $_POST['hobby'];
$hobbies = implode(", ",$hobby);
$update = "UPDATE validate set Names = '$names',Address = '$address', Sex = '$sex', Hobby = '$hobbies' where id = $id";
$new = mysqli_query($xonn,$update);


if($new){
    echo "<script>
    alert('Values Updated');
    window.location.href='display.php';
    </script>";
}else{
    
    echo "<script>
    alert('Values Not Updated');
    window.location.href='form.php';
    </script>";
}
    }
    ?>
</body>
</html>