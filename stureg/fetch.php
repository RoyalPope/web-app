<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Id</td>
            <td>fname</td>
            <td>lname</td>
            <td>dob</td>
            <td>district</td>
            <td>sports</td>
            <td>gender</td>
        </tr>
        <?php
        include ("conn.php");

        $sql = "SELECT id,fname,lname,dob,district,sports,gender from registraion";
        $result = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['fname']?></td>
                <td><?php echo $row['lname']?></td>
                <td><?php echo $row['dob']?></td>
                <td><?php echo $row['district']?></td>
                <td><?php echo $row['sports']?></td>
                <td><?php echo $row['gender']?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>