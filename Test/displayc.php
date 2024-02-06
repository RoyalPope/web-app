<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        width: 80%;
        border-collapse: collapse;
        margin: 0 auto;
    }
    th, td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>

</head>
<body>
    <table>
        <tr>
            <td>Fname</td>
            <td>Lname</td>
            <td>Age</td>
            <td>Phone</td>
            <td>Location</td>
        </tr>
        <?php
        include ("conn.php");
        include ("index.html");

        $fetch = "SELECT Fname,Lname,Age,Phone,Location from customer";
        $sql = mysqli_query($conn,$fetch);

        while($row = mysqli_fetch_assoc($sql)){
            ?>
            <tr>
                <td><?php echo $row['Fname']?></td>
                <td><?php echo $row['Lname']?></td>
                <td><?php echo $row['Age']?></td>
                <td><?php echo $row['Phone']?></td>
                <td><?php echo $row['Location']?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>