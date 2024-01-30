<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            
        }
        thead td{
            width: 20%;
            background-color: rgb(27, 142, 79);
        }
        td{
            border-bottom: 2px solid rgb(27, 142, 79);
            border-radius:4px;
            padding-left: 7px;
        }
        input{
            width: 8%;
            height: 35px;
            border: none;
            background-color: rgb(27, 142, 79);
            border-radius: 5px;
            
        }
    </style>
</head>
<body>
    <table>
    <tr>
        <thead>
        <td>ID</td>
        <td>Fname</td>
        <td>Lname</td>
        </thead>
    </tr>
<?php
include("conn.php");

$sql = "SELECT * from list";
$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($result)) {
?>

    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['fname'];?></td>
        <td><?php echo $row['lname'];?></td>
</tr>
<?php
}
?>
</table>
<form action="aform.html" method="post">
    <input type="submit" value="Add User">
</form>
</body>
</html>