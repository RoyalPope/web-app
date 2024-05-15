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
    $id = $_GET['newid'];
    ?>
    <form action="stu.php" method="post">
        <h1>Add New Student</h1>
        <input type="text" name="student" placeholder="Enter Student Name"><br>
        <select name="aid">
            <option>
                <?php
                $select = "SELECT * from address";
                $sql = mysqli_query($xonn,$select);
                while($row = mysqli_fetch_assoc($sql)){
                    ?>Select Address
                    <option value="<?= $row['aid']?>"><?= $row['district']?></option>
                    <?php
                }
                ?>
            </option>
        </select><br>
        <select name="sid">
            <option>
                <?php
                $fetch = "SELECT * from subject";
                $sq = mysqli_query($xonn,$fetch);
                while($room = mysqli_fetch_assoc($sq)){
                    ?>Select Subject
                    <option value="<?= $room['sid']?>"><?= $room['sname']?></option>
                    <?php
                }
                ?>
            </option>
        </select><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>