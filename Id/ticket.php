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
    <form action="tick.php" method="post">
        Names: <select name="name">
            <option value="">
                <?php
            include('conn.php');
            $fetch="SELECT firstnameid,Names from first_name";
            $exec=mysqli_query($con,$fetch);
            while($row=mysqli_fetch_assoc($exec)){
                ?>
            <option value="<?php echo $row['firstnameid'] ?>"><?php echo $row['Names'] ?></option>
            <?php
            }
            ?>
            </option>
        </select><br><br>
        Busname: <select name="bname">
            <option value="">
                <?php
            include('conn.php');
            $select="SELECT * from bus";
            $execute=mysqli_query($con,$select);
            while($row=mysqli_fetch_assoc($execute)){
                ?>
            <option value="<?php echo $row['bid'] ?>"><?php echo $row['bname'] ?></option>
        <?php    
        }
        ?>
            </option>
        </select><br><br>
        Destination: <select name="dest">
            <option value="">
                <?php
            include('conn.php');
            $sel="SELECT  did,fro_m,t_o from destination";
            $exe=mysqli_query($con,$sel);
            while($row=mysqli_fetch_assoc($exe)){
                ?>
                <option value="<?php echo $row['did'] ?>"><?php echo $row['fro_m']; echo "To:" . $row['t_o'] ?></option>
                <?php
            }
            ?>
            </option>
        </select><br><br>
        Date: <input type="date" name="date"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>