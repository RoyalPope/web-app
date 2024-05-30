<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend><a href="display.php">DATA VALIDATION</a></legend>
    <form action="insert.php" method="post">
        <input type="text" name="names" placeholder="FULL NAMES"><br><br>
        <input type="text" name="address" placeholder="ADDRESS"><br><br>
        Sex: <input type="radio" name="gender" value="female"> F
        <input type="radio" name="gender" value="male"> M <br><br>
        Hobies:
        <input type="checkbox" name="hobby[]" value="cooking"> Cooking<br><br>
        <div class="checks">
        <input type="checkbox" name="hobby[]" value="pray"> Pray<br><br>
        <input type="checkbox" name="hobby[]" value="swimming"> Swimming<br><br>
        <input type="checkbox" name="hobby[]" value="play"> Play<br><br>
        </div>
        <input type="submit" value="Save Data" name="set"><br><br>
    </form>
    </fieldset>
</body>
</html>