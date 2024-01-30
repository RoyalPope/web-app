<?php
$a = $_POST['one'];
$b = $_POST['two'];
function sum(int $a,int $b){
    return $a+$b;
}
echo sum($a,$b);
?>