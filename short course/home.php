<?php
session_start();

if(!$_SESSION['user']){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Document</title>

</head>
<body>
    
    <div class="menu">
    <ul>
        <li><a href="home.php">HOME</a></li>
        <li>Trainees
        <div class="submenu">
                <ul>
                    <li><a href="trainee.php">Add Trainee</a></li>
                    <li><a href="marks.php">Add marks</a></li>
                </ul>
            </div>
    </li>
        <li><a href="mreport.php">Report</a>
        </li>
        <li>
        <form action="sess.php" method="post">
    <button type="submit">Log Out</button>
    </form>
        </li>
    </ul>
    </div>
    
</body>
</html>