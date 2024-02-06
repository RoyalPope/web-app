<?php
$m = $_POST['marks'];

// if ($m<=100 and $m>=80) {
//     echo "Grade A";
// }elseif ($m<=79 and $m>=50) {
//     echo "Grade B";
// }elseif ($m<=49 and $m >= 0) {
//     echo "Grade C";
// }else {
//     echo "INVALID MARKS!";
// }


switch ($m) {
    case $m<=100 and $m>=80:
        echo "Grade A";
        break;
    case $m<=79 and $m>=50:
        echo "Grade B";
        break;
    case $m<=49 and $m >= 0:
        echo "Grade C";
        break;
    default:
    echo "INVALID MARKS!";
        break;
}
?>