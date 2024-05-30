<?php
include('xonn.php');

$title = $_POST['book'];
$author = $_POST['author'];
$year = $_POST['year'];
$type = $_POST['type'];

if(strlen($year)>4 or strlen($year)<4){
    echo "<script>
        alert('Invalid year');
        window.loaction.href='form.php';
    </script>";
}else{

$insert = "INSERT into books (title,author,year,genre) values ('$title','$author','$year','$type')";
$exec = mysqli_query($xonn,$insert);

if($exec){
    echo "<script>
        alert('book good');
        window.loaction.href='form.php';
    </script>";
}
}

?>