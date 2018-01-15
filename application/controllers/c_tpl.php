<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_tpl
 *
 * @author oka.lingga
 */
class c_tpl extends CI_Controller{
    
    function direct(){
        $data["judulapp"]="Demo Load Beberapa View Langsung";
        $this->load->helper("html");
        $this->load->helper("url");
        $this->load->view("common/v_apphead",$data);
        $this->load->view("common/v_appjudul",$data);
        $this->load->view("common/v_appmenu");
        $this->load->view("v_ctpl_direct");
        $this->load->view("common/v_appfooter");
    }
    
    function stream(){
        $this->load->helper("html");
        $this->load->helper("url");
        $data["judulapp"]="Demo Load Beberapa View Dengan Stream";
        $output=$this->load->view("common/v_apphead",$data,true);
        $output.=$this->load->view("common/v_appjudul",$data,true);
        $output.=$this->load->view("common/v_appmenu",true);
        $output.=$this->load->view("v_ctpl_stream",true);
        $output.=$this->load->view("common/v_appfooter",true);
        echo $output;
    }
    
    function layout(){
        $this->load->helper("html");
        $this->load->helper("url");
        $data["judulapp"]="Demo Load Beberapa View Dengan Stream";
// ditambah lagi proses untuk mendapatkan data yang akan ditampilkan
        $data["fileview"]="v_ctpl_content";
        $output=$this->load->view("common/v_applayout",$data);
    }
}
