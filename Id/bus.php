<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: beige;
            margin: 0;
            padding: 0;
        }
        form{
            max-width: 300px;
            margin: 20px auto;
            padding: 30px;
            border: 1px solid black;
            border-radius: 5px;
        }
        input[type="submit"]{
            background-color: brown;
            color: white;
            padding: 10px 15px;
            cursor: pointer;
        }
        input[type="text"]{
            width: 80%;
            background-color: beige;
            color: black;
            padding: 10px 15px;
        }
    </style>
    <?php
    include('nav.php')
    ?>
    <title>Document</title>
</head>
<body>
    <h1>Hello,</h1>
    <form action="bux.php" method="post">
        BUSNAME: <input type="text" name="bus" placeholder="Enter Bus name">
        NSeats: <input type="text" name="seat" placeholder="Enter number of seats"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>