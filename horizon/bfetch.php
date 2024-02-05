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
                <td>Bus No</td>
                <td>Origin</td>
                <td>Destination</td>
                <td>Payment Amount</td>
                <td>Time</td>
            </thead>
        </tr>
        <?php
        include ("conn.php");
        include ("index.html");

        $fetch = "SELECT bus_no,origin,destination,payment_amount,departure_time from busline";
        $result = mysqli_query($conn,$fetch);

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
        <td><?php echo $row['bus_no']?></td>
        <td><?php echo $row['origin']?></td>
        <td><?php echo $row['destination']?></td>
        <td><?php echo $row['payment_amount']?></td>
        <td><?php echo $row['departure_time']?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>