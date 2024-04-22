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
    include("home.php");
    ?>
    <table>
        <tr>
            <td>No</td>
            <td>Trainee Names</td>
            <td>Assessment</td>
            <td>Exam</td>
            <td>Total</td>
        </tr>
<?php
include("conn.php");

$module = $_POST['module'];
$x=0;
$sum = 0;
$fetch = "SELECT * from marks where moduleCode = '$module' order by (examMarks+assessMarks) desc";
$sql = mysqli_query($conn,$fetch);

while($row = mysqli_fetch_assoc($sql)){
    $select = "SELECT concat(firstName,' ',lastName) as names from trainees where traineeId = '".$row['traineeId']."'";
    $run = mysqli_query($conn,$select);
    $nam = mysqli_fetch_assoc($run);
    $x = $x +1;
    ?>
    <tr>
        <td><?php echo $x?></td>
        <td><?php echo $nam['names']?></td>
        <td><?php echo $row['assessMarks']?></td>
        <td><?php echo $row['examMarks']?></td>
        <td><?php $tot = $row['assessMarks'] + $row['examMarks']; echo $tot?></td>
    </tr>
    <?php
    $sum = $sum + $tot;
}
?>
<tr>
    <td></td>
    <td colspan="3" text-align="right"><b>Class Average</b></td>
    <td><?php $avg = $sum/$x; echo round($avg,2) ?></td>
</tr>

</body>
</html>