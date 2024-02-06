<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "l5sodb";

$conn = new mysqli($server,$user,$pass,$dbname);

if($conn -> connect_error){
    die("connection failed:" .$conn -> connect_error);
}else{
    echo "Connection successful";
}
?>