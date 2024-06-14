<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin: auto;
        }
    </style>
</head>
<body>
    <table border=1 width="300" height="300">
    <?php
                $a=0;
                for ($rows=1; $rows<=4 ; $rows++) { 
                    echo '<tr>';
                    for ($cols=1; $cols<=4 ; $cols++) {
                         $a=$a+2;
                            echo "<td>$a</td>";  
                    }
                    echo '</tr>';
                }
    ?>
    </table>
</body>
</html>