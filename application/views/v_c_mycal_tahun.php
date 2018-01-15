<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $judulapp;?></title>
    </head>
    <body>
        <?php
        echo '<table>';
        echo "<caption>".heading($judulapp,2)."</caption>";
        $i=1;
        foreach ($varkal as $bulan=>$kal){
            if($i==1) echo "<tr>";
            echo "<td style='cellpadding=5px;border:solid 1px'>".$kal."</td>";
            $i++;
            if($i==5){
                echo "<t/r>";
                $i=1;
            }
        }
        echo "</table>"
        ?>
    </body>
</html>
