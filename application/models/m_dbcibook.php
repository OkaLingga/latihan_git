<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_dbcibook
 *
 * @author oka.lingga
 */
class m_dbcibook extends CI_Model{
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
    
    function gettblteman(){
        $sqlstr="Select * from tblteman";
        $hslquery=  $this->db->query($sqlstr);
        return $hslquery;
    }
    
    function uruttblteman(){
        $sqlstr="Select * from tblteman order by NamaTeman desc";
        $hslquery=  $this->db->query($sqlstr);
        return $hslquery;
    }
}
