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
        echo heading($judulapp,2);
        echo "Jumlah Record : ".$hslquery->num_rows();
        echo "<hr/>";
        ?>
        <table style="margin:auto;width:80%;">
            <?php
            $c=1;
            foreach ($hslquery->result() as $row){
                if($c>2){
                    echo "</tr>";
                    $c=1;
                }
                if($c==1) echo "<tr>";
                echo "<td>";
                echo "No : ".$row->NoTeman;
                echo br();
                echo "Nama : ".$row->NamaTeman;
                echo br();
                echo "No Telp : ".$row->NoTelp;
                echo br();
                echo "Email : ".$row->Email;
                echo "<hr/>";
                echo "</td>";
                $c++;
            }
            ?>
        </table>
    </body>
</html>
