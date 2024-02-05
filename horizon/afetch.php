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
            <td>Customer Code</td>
            <td>Paid Amount</td>
            </thead>
        </tr>
        <?php
        include ("conn.php");
        include ("index.html");

        $fetch = "SELECT customer_code,amount_paid from account";
        $result = mysqli_query($conn,$fetch);

        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
        <td><?php echo $row['customer_code']?></td>
        <td><?php echo $row['amount_paid']?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>