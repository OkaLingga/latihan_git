<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_userreg
 *
 * @author Oka
 */
class c_userreg extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper(array("html","form","url","text"));
    }
    
    function form(){
        $this->load->library("form_validation");
        $this->load->model("m_userreg");
        $data=  $this->m_userreg->userdef();
        $userrules=  $this->m_userreg->userrules();
        $this->form_validation->set_rules($userrules);
        $data["aksi"]="c_userreg/form";
        if($this->form_validation->run()==FALSE){
            $data["judulapp"]="Registrasi Pengguna";
            $this->load->view("v_c_userreg_form",$data);
        }else{
            $data["judulapp"]="Registrasi Berhasil";
            $this->load->view("v_c_userreg_sukses",$data);
        }
    }

}
