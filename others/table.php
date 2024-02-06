<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="600" height="600" border=1 align="center">
        <?php

        for ($row=1; $row <=10 ; $row++) { 
            echo '<tr>';
            for ($col=1; $col <=10 ; $col++) {
                $tot = $row + $col;
                if ($tot%2==0) {
                    echo '<td bgcolor="black"></td>';
                }else{
                echo '<td></td>';
                }
            }
            echo '</tr>';
        }

        ?>
        
    </table>
</body>
</html>