<?php
$a = $_POST['one'];
function area(int $a){
    return M_PI * pow($a,2);
}
echo area($a);
?>