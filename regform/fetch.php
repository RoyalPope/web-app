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
            <td>Fname</td>
            <td>Lname</td>
            <td>Email</td>
            <td>Date</td>
        </tr>
        <?php
include ("conn.php");
$date = $_POST['date'];

$fetch = "SELECT * from student where reg_date = '$date'";

$sql = mysqli_query($conn,$fetch);

while ($row = mysqli_fetch_assoc($sql)) {
    ?>
    <tr>
        <td><?php echo $row['Id']?></td>
        <td><?php echo $row['Fname']?></td>
        <td><?php echo $row['Lname']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['reg_date']?></td>
    </tr>
    <?php
}

?>
    </table>
</body>
</html>