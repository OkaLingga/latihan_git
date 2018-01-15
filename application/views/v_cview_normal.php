<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $judulapp?></title>
    </head>
    <body>
        <?php
        echo heading($judulapp,2);
        echo br();
        echo "var1 : ".$var1;
        echo br();
        echo "extrakvar : ".$ekstrakvar;
        echo br();
        echo 'dengan print_r($ekstrakvar)';
        echo br();
        print_r($ekstrakvar);
        echo heading("Isi dari var extrakvar dijadikan variabel : ",3);
        extract($ekstrakvar);
        echo "Framework : ".$frm;
        echo br();
        echo "versi : ".$versi;
        echo br();
        echo "no : ".$no;
        echo br();
        echo current_url();
        ?>
    </body>
</html>
