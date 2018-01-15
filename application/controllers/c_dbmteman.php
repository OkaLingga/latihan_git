<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_dbmteman
 *
 * @author oka.lingga
 */
class c_dbmteman extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper(array("html","form","url","text"));
        $this->load->model("m_dbcibook");
    }
    
    function baca(){
        $data["hslquery"]=  $this->m_dbcibook->gettblteman();
        $data["judulapp"]="Baca tabel dengan Model dan View";
        $this->load->view("v_cdbteman",$data);
    } 
    
    function bacaarr(){
        $data["hslquery"]=  $this->m_dbcibook->gettblteman();
        $data["judulapp"]="Baca tabel Diproses Sebagai Array";
        $this->load->view("v_cdbteman_array",$data);
    }
    
    function urutannamamundur(){
        $data["hslquery"]=  $this->m_dbcibook->uruttblteman();
        $data["judulapp"]="Baca tabel dengan Diurut DESC";
        $this->load->view("v_cdbteman",$data);
    }
    
    function usingrow(){
        $data["hslquery"]=  $this->m_dbcibook->gettblteman();
        $data["judulapp"]="Baca tabel Tampil dengan Method row()";
        $this->load->view("v_cdbteman_usingrow",$data);
    }
}
