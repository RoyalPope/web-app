<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
                table{
            position: center;
        }
        thead td{
            width: 20%;
            background-color: orangered;
        }
        td{
            border-bottom: 2px solid orangered;
            border-radius:4px;
            padding-left: 7px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <thead>
                <td>ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Phone</td>
                <td>Customer Code</td>
            </thead>
        </tr>
        <?php
        include ("conn.php");
        include ("index.html");
        
        $pull = "SELECT customer_id,first_name,last_name,phone_number,customer_code from customer";
        $result = mysqli_query($conn,$pull);
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['customer_id']?></td>
            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['phone_number']?></td>
            <td><?php echo $row['customer_code']?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>