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
    <title>Document</title>
</head>
<body>
    <?php
    include('nav.php')
    ?>
    <form action="seatx.php" method="post">
        Bus name: <select name="bus"> 
            <option value="">
                <?php
            include('conn.php');
            $fetch="SELECT * from bus";
            $exec=mysqli_query($con,$fetch);
            while($row=mysqli_fetch_assoc($exec)){
                ?>
                <option value="<?php echo $row['bid'] ?>"><?php echo $row['bname']?></option>
                <?php
            }?>
            </option>
        </select><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>