<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
    
        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
    
        input[type="checkbox"], input[type="radio"] {
            margin-right: 5px;
        }
    
        input[type="submit"], input[type="reset"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }
        input[type="file"]{
            background-color: #4c9daf;
            color: #fff;
            width: 40%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        } 
    </style>
    
</head>
<body>
    <form action="run.php" method="post">
        First Name: <select name="fname">
            <option value="">
                <?php
                include ("conn.php");

                $fetch = "SELECT fname from student";
                $sql = mysqli_query($conn,$fetch);

                while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                    <option value=""><?php echo $row['fname']?></option>
                    <?php
                }
                ?>
            </option>
        </select> 
        Last Name: <input type="text" name="lname" required><br><br>
        Birth date: <input type="date" name="date" required><br><br>
        District: <select name="dropdown" >
            <option value="">Select District</option>
            <option value="Kigali">Kigali</option>
            <option value="Musanze">Musanze</option>
            <option value="Nyabihu">Nyabihu</option>
            <option value="Rusizi">Rusizi</option>
            <option value="Muhanga">Muhanga</option>
        </select><br><br>
        Sports: <input type="checkbox" value="Football" name="sport">Football
                <input type="checkbox" value="Basketball" name="sport"> Basketball
                <input type="checkbox" value="Volley" name="sport">Volley<br><br>
        Gender: <input type="radio" value="male" name="sex">male
                <input type="radio" value="female" name="sex">female<br><br>
            Upload Image: <input type="file" name="img">
                <input type="submit" value="submit"><input type="reset" value="reset">
    </form>
</body>
</html>