<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_view
 *
 * @author oka.lingga
 */
class c_view extends CI_Controller{
    function normal(){
        $this->load->helper("html");
        $this->load->helper("url");
        $data["judulapp"]="Menampilkan Variabel Cara Normal";
        $data["var1"]="Isi Variabel 1";
        $data["ekstrakvar"]=array(
            "versi"=>"Versi",
            "frm"=>"Framework CodeIgniter",
            "no"=>"2.1.0"
        );
        $this->load->view("v_cview_normal",$data);
    }
}
