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
        echo validation_errors();
        echo form_open($aksi);
        echo form_label("Nama User : ");
        echo form_input($username);
        echo br();
        echo form_label("Password : ");
        echo form_password($userpass);
        echo br();
        echo form_label("Password Konfirmasi : ");
        echo form_password($userpassv);
        echo br();
        echo form_label("Email : ");
        echo form_input($usermail);
        echo br();
        echo form_submit("btnReg","Register");
        echo form_close();
        ?>
    </body>
</html>
