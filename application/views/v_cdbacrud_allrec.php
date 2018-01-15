<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $judulapp;?></title>
    </head>
    <body>
        <?php
        echo heading($judulapp,2);
        echo "Jumlah Record : ".$hslquery->num_rows();
        echo "<hr/>";
        ?>
        <table style="margin:auto";width:80%>
            <?php
            $c=1;
            foreach($hslquery->result_array() as $row){
                if($c>2){
                    echo "</tr>";
                    $c=1;
                }
                if($c==1) echo "<tr>";
                echo "<td>";
                echo "No : ".$row["NoTeman"];
                echo br();
                echo "Nama : ".$row["NamaTeman"];
                echo br();
                echo "No Telp : ".$row["NoTelp"];
                echo br();
                echo "Email : ".$row["Email"];
                echo "<hr/>";
                echo "</td>";
                $c++;
            }
            ?>    
        </table>
        <?php $this->load->view("v_cdbacrud_menu");?>
    </body>
</html>