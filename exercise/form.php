<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        Title: <input type="text" name="book"><br><br>
        Author: <input type="text" name="author"><br><br>
        Year: <input type="number" name="year" pattern="\d{1,4}" maxlength="4" minlength="4"><br><br>
        Genre: <input type="text" name="type"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>