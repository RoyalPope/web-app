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
        background-color: #f2f2f2;
    }
</style>
</head>
<body>
    <?php
    include("nav.php");
    ?>
    
    <table>
        <tr>
            <td>Module Title</td>
            <td>Assessment</td>
            <td>Exam</td>
            <td>Total</td>
            <td>Decision</td>
        </tr>
<?php
include("conn.php");

$id = $_SESSION['user'];

$sel = "SELECT * from trainees where traineeId = '$id'";
$exe = mysqli_query($conn,$sel);
$while = mysqli_fetch_assoc($exe);

$fetch = "SELECT * from marks where traineeId = '$id'";
$sql = mysqli_query($conn,$fetch);

while($row = mysqli_fetch_assoc($sql)){
    $select = "SELECT moduleName from modules where moduleCode = '".$row['moduleCode']."'";
    $run = mysqli_query($conn,$select);
    $nam = mysqli_fetch_assoc($run);
    ?>
    
    <tr>
        <td><?php echo $nam['moduleName']?></td>
        <td><?php echo $row['assessMarks']?></td>
        <td><?php echo $row['examMarks']?></td>
        <td><?php $tot = $row['assessMarks'] + $row['examMarks']; echo $tot?></td>
        <td>
        <?php
            if($tot>=120){
                echo "PASS";
            }else{
                echo "NYC";
            }
            ?>
        </td>
    </tr>
    <?php
}
?>
<h2><?php echo "ID: $id <br>Names: ".$while['firstName']." ".$while['lastName']?></h2>
</body>
</html>