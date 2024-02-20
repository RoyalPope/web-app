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
        background-color: #dddddd;
    }
</style>
</head>
<body>
    <?php
    include("nav.html");
    ?>
    <table>
        <tr>
        <th>Customer</th>
        <th>Bus</th>
        <th>Destination</th>
        <th>Amount To Pay</th>
        <th>Date & Time</th>
        </tr>
        <?php
        include("conn.php");

        $select = "SELECT * from ticket t inner join destionation d on t.did = d.did ";
        $sql = mysqli_query($conn,$select);

        while($row = mysqli_fetch_assoc($sql)){
            ?>
            <tr>
                <td><?php echo $row['cyusa_id']?></td>
                <td><?php echo $row['bid']?></td>
                <td><?php echo " From: ". $row['Froms'];echo "<br> To: ".$row['Tod']?></td>
                <td><?php echo $row['Price']?></td>
                <td><?php echo $row['date']?></td>
            </tr>
            <?php
        }

        ?>
    </table>
</body>
</html>