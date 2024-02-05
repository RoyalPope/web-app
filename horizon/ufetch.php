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
            <td>Username</td>
            <td>Password</td>
            <td>User Type</td>
            </thead>
        </tr>
        <?php
        include ("conn.php");
        include ("index.html");
        
        $fetch = "SELECT user_id,user_name,password,user_type from users";
        $result = mysqli_query($conn,$fetch);
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['user_id']?></td>
            <td><?php echo $row['user_name']?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['user_type']?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>