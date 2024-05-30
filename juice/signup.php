<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylee.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="new.php" method="post">
        <h1>New User</h1>
        Username: <input type="text" name="uname"><br><br>
        Password: <input type="password" name="pass"><br><br>
        User Type: <select name="type" id="">
            <option value="owner">Owner</option>
            <option value="worker">Worker</option>
        </select><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>