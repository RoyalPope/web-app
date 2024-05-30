<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1 cellspacing=0>
        <tr>
            <th>No</th>
            <th>Names</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Hobbies</th>
            <th>Action</th>
        </tr>
        <?php
        include('xonn.php');

        $select = "SELECT * from validate";
        $sql = mysqli_query($xonn,$select);
        $n = 0;

        while($row = mysqli_fetch_assoc($sql)){
            $n++;
            ?>
            <tr>
                <th><?= $n?></th>
                <td><?= $row['Names']?></td>
                <td><?= $row['Address']?></td>
                <td><?= $row['Sex']?></td>
                <td><?= $row['Hobby']?></td>
                <td>
                    <a href="delete.php?id='<?=$row['id']?>'">DELETE</a>
                    <a href="update.php?id='<?=$row['id']?>'">UPDATE</a>
                </td>
            </tr>



            <?php

        }

        ?>
        <tr>
            <td colspan="6"><button><a href="form.php">Add New</a></button></td>
        </tr>
    </table>
</body>
</html>