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
        echo heading($judulapp,1);
        echo heading("Selamat",2);
        echo form_label("Nama User : ");
        echo $username["value"];
        echo br();
        echo form_label("Email : ");
        echo $usermail["value"];
        echo br();
        ?>
    </body>
</html>
