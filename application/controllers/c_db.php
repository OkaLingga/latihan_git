<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_DB
 *
 * @author oka.lingga
 */
class c_db extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper(array("html","form","url","text"));
    }
    
    function cekkoneksi(){
        $config["hostname"]="localhost";
        $config["dbdriver"]="mysql";
        $config["database"]="dbcibook";
        $config["username"]="root";
        $config["password"]="";
        
        $this->load->database($config);
        echo "DB OK";
    }
    
    function errkoneksi(){
        $config["hostname"]="localhost";
        $config["dbdriver"]="mysql";
        $config["database"]="dbcibook";
        $config["username"]="root";
        $config["password"]="a";
        $config["db_debug"]=FALSE;
        
        if($this->load->database($config)){
            echo "DB OK";
        }else{
            echo "Err DB Connection!";
        }
    }

}
