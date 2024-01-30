<?php
$b = $_POST['end'];

function fact(int $b){
    $f=1;   
if ($b<0) {
    echo "No factorial for negative number";
}else {
    for ($a=1; $a <= $b ; $a++) { 
        $f=$f*$a;
    }
    echo $f;
}
}
echo fact($b);

?>