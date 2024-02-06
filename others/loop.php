<?php
$b = $_POST['end'];
$s=0;
for ($a=1; $a <= $b ; $a++) { 
    $s=$s+$a;
}
echo $s;
?>