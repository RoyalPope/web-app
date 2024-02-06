<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = array(
        array(
                array('chaste','bio',87),
                array('pope','chem',93),
                array('royal','geo',75)
    )
    );
    for ($i=0; $i <count($a) ; $i++) { 
        for ($j=0; $j <count($a[$i]) ; $j++) { 
            echo $a[$i][$j];
        }
    }

    
    ?>
</body>
</html>