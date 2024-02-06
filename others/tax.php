<?php
    $a = $_POST['amt'];

    if ($a<=2000) {
        echo 'No Discount';
    }elseif ($a>2001 and $a<=10000) {
        $tot = $a * 1/100;
        echo 'The Discount = '.$tot;
    }elseif ($a>10001 and $a<=22000) {
        $tot = $a * 1.5/100;
        echo 'The Discount = '.$tot;
    }elseif ($a>22000) {
        $tot = $a * 2/100;
        echo 'The Discount = '.$tot;
    }else {
        echo 'INVALID INPUT';
    }
?>