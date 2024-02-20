<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        }

        .form {
        max-width: 400px;
        margin: 0 auto;
        padding: 40px;
        background-color: #fff;
        border-radius: 8px;
        margin-top: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
        font-size: 24px;
        margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
    include("nav.html");
    ?>
    <div class="form">
        <h1>Available Seats</h1>
    <?php
include("conn.php");

$seat = $_POST['bus'];

$fetch = "SELECT nseats from bus where bid = '$seat'";
$sql = mysqli_query($conn,$fetch);

while($row = mysqli_fetch_assoc($sql)){
    echo $row['nseats']." Seats";
}
?>
    </div>
</body>
</html>