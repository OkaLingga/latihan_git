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
        $username=array(
            "name"=>"username",
            "id"=>"username",
            "maxlength"=>"15",
            "size"=>"10",
            "style"=>"background:cyan"
        );
        $userpass=array(
            "name"=>"userpass",
            "id"=>"userpass",
            "maxlength"=>"15",
            "size"=>"10",
            "style"=>"background:red"
        );
        echo heading($judulapp,1);
        echo form_open("c_login");
        echo form_label("Nama User : ");
        echo form_input($username);
        echo br();
        echo form_label("Password : ");
        echo form_input($userpass);
        echo br();
        echo form_submit("","Login");
        echo form_close();
        ?>
    </body>
</html>
