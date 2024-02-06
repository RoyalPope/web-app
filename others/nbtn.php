<?php
// $a = $_POST['n1'];
// $b = 1;
// while ($b <= $a) {
//     echo $b;
//     $b++;
//     echo '<br>';
// }
$a = $_POST['n1'];
$b = $_POST['n2'];
$sum = 0;

// if ($a<$b) {
//     $b = $b-1;
// while ($a < $b) {
//     $a++;
//     echo $a;
//     echo '<br>';
// }}elseif ($a>$b) {
//     $b = $b+1;
// while ($a > $b) {
//     $a--;
//     echo $a;
//     echo '<br>';
// }}elseif ($a=$b) {
//     echo 'No Range Available';
// }
// else {
//     echo 'INVALID INPUT';
// }
if ($a<$b) {
    $a=$a-1;
while ($a < $b) {
    $a++;
    $sum = $sum +$a;
}
echo $sum;
}elseif ($a>$b) {
while ($a > $b) {
    $a--;
    $sum = $sum +$a;
}
echo $sum;
}elseif ($a=$b) {
    $sum = $a+$b;
    echo "the sum = ".$sum;
}
else {
    echo 'INVALID INPUT';
}
?>