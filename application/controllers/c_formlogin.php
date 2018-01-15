<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_formlogin
 *
 * @author oka.lingga
 */
class c_formlogin extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper("html");
        $this->load->helper("form");
        $this->load->helper("text");
    }

    function withhelper(){
        $data["judulapp"]="Form Login : Dengan Helper";
        $this->load->view("v_c_formlogin_withhelper",$data);
    }
    
    function attribut(){
        $data["judulapp"]="Form Login : Dengan Helper+Atribut";
        $this->load->view("v_c_formlogin_attribut",$data);
    }
    
    function frommodel(){
        $this->load->model("m_formlogin");
        $data=  $this->m_formlogin->formuser();
        $data["judulapp"]="Form login : From Model";
        $this->load->view("v_c_formlogin_frommodel",$data);
    }
}
