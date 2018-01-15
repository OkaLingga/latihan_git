<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_demouri
 *
 * @author oka.lingga
 */
class c_demouri extends CI_Controller{
    function showuriseg(){
        $this->load->helper("html");
        echo heading("Show URI dan Segmennya",2);
        echo "String URI : ".$this->uri->uri_string();
        echo br();
        $j=  $this->uri->total_segments();
        echo "Jumlah Segment URI : ".$j;
        echo br();
        echo "Rincian URI";
        echo br();
        for($i=1;$i<=$j;$i++){
            echo "$i=".$this->uri->segment($i);
            echo br();
        }
    }
    
    function showurluri(){
        $this->load->helper("html");
        $this->load->helper("url");
        echo heading("Show URL,URI dan Segmennya",2);
        echo "Base URL : ".base_url();
        echo br();
        echo "Site URL : ".  site_url();
        echo br();
        echo "String URI : ".$this->uri->uri_string();
        echo br();
        $j=  $this->uri->total_segments();
        echo "Jumlah Segment URI : ".$j;
        echo br();
        echo "Rincian URI";
        echo br();
        for($i=1;$i<=$j;$i++){
            echo "$i=".$this->uri->segment($i);
            echo br();
        }
    }
    
    function jumlah($bil1=0,$bil2=0){
        $this->load->helper("html");
        echo heading("Penjumlahan Tanpa URI",2);
        echo "Bilangan #1 : ".$bil1;
        echo br();
        echo "Bilangan #2 : ".$bil2;
        echo br();
        echo "Hasil Jumlah 2 Bilangan : ".($bil1+$bil2);
        echo br();
    }
    
    function jumlahkan(){
        $this->load->helper("html");
        echo heading("Penjumlahan Dengan URI",2);
        $jseg=  $this->uri->total_segments();
        $jbil=$jseg-3;
        echo "Jumlah Bilangan : ".$jbil;
        echo br();
        $n=1;
        $sum=0;
        for($i=4;$i<=$jseg;$i++){
            $bil=  $this->uri->segment($i);
            $sum+=$bil;
            echo "Bilangan #$n : ".$bil;
            echo br();
            $n++;
        }
        echo br();
        echo "Hasil jumlah $jbil bilangan : ".$sum;
        echo br();
        
    }
}
?>
