<?php
// $a = array(1,6,8,2,7);
// foreach ($a as $value) {
//     echo $value;
// }

$b = $_POST['array'];

$inputLength = strlen($b);
for ($i = 0; $i < 5; $i++) {
    $startIndex = $i * $inputLength / 5;
    $endIndex = ($i + 1) * $inputLength / 5;
           // Check if index is within the bounds of the string
           if ($startIndex < $inputLength) {
            $value = $b[$startIndex];
            echo "Input " . ($i + 1) . ": " . $value . "<br>";
        }
    }
?>