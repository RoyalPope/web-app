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
    select {
    width: 200px;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    appearance: none;
    }

    select option {
    font-size: 16px;
    }

    select option:checked {
    background-color: #f0f0f0;
    }

    input{
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    }
  
    input[type="submit"] {
    background-color: #C9C19F;
    color: white;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    }
  
    input[type="submit"]:hover {
    background-color: #7D7C7A;
    transform: scale(1.05);
    }
    </style>
</head>
<body>
    <?php
    include("home.php");
    ?>
    <div class="form">
    <form action="repot.php" method="post">
        <h1>Module Report</h1>
    Module: <br><select name="module">
    <option value="">
                <?php
                    include("conn.php");
                $fetch = "SELECT moduleCode,moduleName from modules";
                $query = mysqli_query($conn,$fetch);

                while($row = mysqli_fetch_assoc($query)){
                    ?>
                    <option value="<?php echo $row['moduleCode']?>"><?php echo $row['moduleName']?></option>
                    <?php
                }

                ?>
            </option>
        </select><br><br>
        <input type="submit" value="Generate Report">
    </form>
    </div>
</body>
</html>