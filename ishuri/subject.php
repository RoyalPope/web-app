<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('xonn.php');
    include('index.php');
    ?>
    <form action="sub.php" method="post">
        <h1>Add New Subject</h1>
        <input type="text" name="subject" placeholder="Enter Subject"><br>
        <select name="cid">
            <option>
                <?php
                $select = "SELECT * from class";
                $sql = mysqli_query($xonn,$select);
                while($row = mysqli_fetch_assoc($sql)){
                    ?>Select Class
                    <option value="<?= $row['cid']?>"><?= $row['cname']?></option>
                    <?php
                }
                ?>
            </option>
        </select><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>