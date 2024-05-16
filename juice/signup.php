<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="new.php" method="post">
        Username: <input type="text" name="uname">
        Password: <input type="password" name="pass">
        User Type: <select name="type" id="">
            <option value="owner">Owner</option>
            <option value="worker">Worker</option>
        </select>
        <input type="submit" value="submit">
    </form>
</body>
</html>