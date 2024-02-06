<?php
// $cars = ['volvo', 'bmw', 'toyota'];
// ksort($cars);

// print_r($cars);
// echo fopen('file.php','a');
// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "John Doe\n";
// fwrite($myfile, $txt);
// $txt = "Jane Doe\n";
// fwrite($myfile, $txt);
// fclose($myfile);

$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>