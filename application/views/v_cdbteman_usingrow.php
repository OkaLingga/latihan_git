<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
function displayrow($row,$norec){
    echo "No Record : ".$norec;
    echo "<hr/>";
    echo "No : ".$row->NoTeman;
    echo br();
    echo "Nama : ".$row->NamaTeman;
    echo br();
    echo "No Telp : ".$row->NoTelp;
    echo br();
    echo "Email : ".$row->Email;
    echo "<hr/>";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $judulapp;?></title>
    </head>
    <body>
        <?php
        echo heading($judulapp,2);
        echo "<hr/>";
        $norow=$hslquery->num_rows();
        $row=$hslquery->last_row();
        displayrow($row,$norow);
        $norow=1;
        $row=$hslquery->first_row();
        displayrow($row,$norow);
        $norow=4;
        $row=$hslquery->row($norow);
        displayrow($row,$norow);
        ?>
    </body>
</html>
