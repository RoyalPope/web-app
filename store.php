<?php
echo "Q1. <br>";
$a = [1,2,3,4,5];
sort($a);
echo "ascending <br>";
foreach ($a as $value) {
    echo $value .'<br>';
}
rsort($a);
echo "descending <br>";
foreach ($a as $value) {
    echo $value.'<br>';
}
echo "<br>Q2. <br>";
$b = array(
    'David' => 35,
    'Josh' => 40,
    'Ainah' => 22
);
ksort($b);
foreach ($b as $key => $value) {
    echo "$key : $value <br>";
}
echo "<br>Q3. <br>";

$c = array(
    'david'=>array(12,30),
    'Josh'=>array(20,10),
    'Ainah'=>array(35,23),
    'Linda'=>array(43,22)
);
foreach ($c as $key => $value) {
    echo "$key :
    <br> Maths = $value[0],
    <br>Physics = $value[1]  <br><br>";
}



?>