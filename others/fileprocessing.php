<?php
$file = fopen("mytext.txt","w");
$txt = $_POST['txt'];
fwrite($file,$txt);
fclose($file);
readfile("mytext.txt");
?>