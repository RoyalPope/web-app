<?php
$a = $_POST['n1'];
$b = $_POST['n2'];

if ($a<$b) {
    $b = $b-1;
while ($a < $b) {
    $a++;
    echo $a;
    echo '<br>';
}}elseif ($a>$b) {
    $b = $b+1;
while ($a > $b) {
    $a--;
    echo $a;
    echo '<br>';
}}else {
    echo 'INVALID INPUT';
}
?>