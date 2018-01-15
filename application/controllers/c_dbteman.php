<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_dbteman
 *
 * @author oka.lingga
 */
class c_dbteman extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper(array("html","form","url","text"));
        $config["hostname"]="localhost";
        $config["dbdriver"]="mysql";
        $config["database"]="dbcibook";
        $config["username"]="root";
        $config["password"]="";
        $this->load->database($config);
    }
    
    function baca(){
        $sqlstr="Select * from tblteman";
        $hslquery=  $this->db->query($sqlstr);
        echo "Hasil Pembacaan Data Tebel Teman";
        echo br();
        echo "print_r:";
        echo br();
        print_r($hslquery);
        echo br();
        echo "var_dump";
        echo br();
        var_dump($hslquery);
    }
    
    function libtabel(){
        $this->load->library("table");
        $sqlstr="Select * from tblteman";
        $hslquery=  $this->db->query($sqlstr);
        echo 'Tampil Hasil Pembacaan Dengan Librari Table';
        $datatable1=  $this->table->generate($hslquery);
        echo $datatable1;
    }
    
    function loopobj(){
        $sqlstr="Select * from tblteman";
        $hslquery=  $this->db->query($sqlstr);
        echo "Tampil Hasil Pembacaan Data Tebel Teman dengan Foreach";
        echo br();
        foreach ($hslquery->result() as $row){
            echo $row->NoTeman;
            echo $row->NamaTeman;
            echo $row->NoTelp;
            echo $row->Email;
            echo br();
        }
    }
}
