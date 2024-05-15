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
    <form action="" method="get">
        <div class="ser">
        <input type="text" name="ser" placeholder="Search...">
        <button type="submit" name="submit">Search</button>
        </div>
    </form>
    
    <table border=1 cellspacing=0>
        <tr>
        <th>No</th>
        <th>Amazina</th>
        <th>Isomo</th>
        <th>Ishuri</th>
        <th>Address</th>
        <th colspan=2>Action</th>
        </tr>
        <?php
        include('xonn.php');
        $n= 0;
        if(isset($_GET['submit'])){
        $ser = $_GET['ser'];
        $fetch = "SELECT student.stdname,subject.sname,class.cname,address.district from student 
         inner join subject on student.sid = subject.sid
         inner join class on class.cid = subject.cid 
         inner join address on student.aid = address.aid
         where student.stdname like '%$ser%' or subject.sname like '%$ser%' or class.cname like '%$ser%' or address.district like '%$ser%'
         ORDER BY student.stdname ASC ";
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
                <td><a href="new.php?newid=<?= $row['stdid']?>">Update</a></td>
                <td><a href="del.php?delid=<?= $row['stdid']?>">Delete</a></td>
            </tr>
        <?php
        }
     }else{
        $fetch = "SELECT student.stdid,student.stdname,subject.sname,class.cname,address.district from student 
         inner join subject on student.sid = subject.sid
         inner join class on class.cid = subject.cid 
         inner join address on student.aid = address.aid
         ORDER BY student.stdname ASC";
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
                <td><a href="new.php?newid=<?= $row['stdid']?>">Update</a></td>
                <td><a href="del.php?delid=<?= $row['stdid']?>">Delete</a></td>
            </tr>
            <?php
        }
     }
        ?>
        <tr>
            <td colspan="4"><b>Umubare W'abanyeshuri:</b></td>
            <td colspan="3"><b><?= $n?></b></td>
        </tr>
    </table>
</body>
</html>