<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('index.php');
    ?>
    <table border=1>
        <tr>
        <th>No</th>
        <th>Amazina</th>
        <th>Isomo</th>
        <th>Ishuri</th>
        <th>Address</th>
        </tr>
        <?php
        include('xonn.php');
        $n= 0;
        $fetch = "SELECT student.stdname,subject.sname,class.cname,address.district from student 
         inner join subject on student.sid = subject.sid
         inner join class on class.cid = subject.cid 
         inner join address on student.aid = address.aid";
        $exec = mysqli_query($xonn,$fetch);
        while($row = mysqli_fetch_array($exec)){
            $n=$n+1;
            ?>
            <tr>
                <td><?= $n?></td>
                <td><?= $row['stdname']?></td>
                <td><?= $row['sname']?></td>
                <td><?= $row['cname']?></td>
                <td><?= $row['district']?></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="4">Umubare W'abanyeshuri:</td>
            <td><b><?= $n?></b></td>
        </tr>
    </table>
</body>
</html>