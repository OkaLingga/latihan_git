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
        $namameta=array(
            array('name'=>'robots','content'=>'no-cache'),
            array('name'=>'description','content'=>"$judulapp"),
            array('name'=>'keywords','content'=>'buku,CI,view,dir(demo)'),
            array('name'=>'Content-type','content'=>'tect/html','type'=>'equiv'),
        );
        
        echo meta($namameta);
        echo link_tag("asset/CSS/mystyles.css");
        ?>