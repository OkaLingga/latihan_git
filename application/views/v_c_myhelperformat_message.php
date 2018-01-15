<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $judulapp;?></title>
    </head>
    <body>
        <?php 
        echo heading($judulapp, 1);
        echo heading("Error Message!", 3);
        echo showmessage($errmessage, "err");
        echo heading("Warning Message!", 3);
        echo showmessage($warnmessage, "warn");
        echo heading("Normal Message!", 3);
        echo showmessage($normalmessage);
        ?>
    </body>
</html>