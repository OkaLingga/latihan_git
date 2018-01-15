<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_myhelperformat
 *
 * @author oka.lingga
 */
class c_myhelperformat extends CI_Controller{
    function preformat(){
        $this->load->helper("html");
        $this->load->helper("MY_format_helper");
        $data["judulapp"]="Contoh Helper Format displaypre()";
        $data["programhello"]='
            /* Hello World Program*/
            #include<stdio.h>
            main(){
                printf("Hello World");
            }';
        $this->load->view("v_c_myhelperformat",$data);
    }
    
    function demomessage(){
        $this->load->helper("html");
        $this->load->helper("MY_format_helper");
        $data["judulapp"]="Contoh Helper Format showmessage()";
        $data["errmessage"]="Error!!!";
        $data["warnmessage"]="Warning!";
        $data["normalmessage"]="Just normal text, common text!";
        $this->load->view("v_c_myhelperformat_message",$data);
    }
}

?>
