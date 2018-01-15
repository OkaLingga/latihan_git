<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_formlogin
 *
 * @author oka.lingga
 */
class m_userreg extends CI_Model{
   
    function userdef(){
        $username=array(
            "name"=>"username",
            "id"=>"username",
            "maxlength"=>"15",
            "size"=>"10",
            "style"=>"background:cyan",
            "value"=>  $this->input->post("username")
        );
        $userpass=array(
            "name"=>"userpass",
            "id"=>"userpass",
            "maxlength"=>"15",
            "size"=>"10",
            "style"=>"background:red",
            "value"=>  $this->input->post("userpass")
        );
        $userpassv=array(
            "name"=>"userpassv",
            "id"=>"userpassv",
            "maxlength"=>"15",
            "size"=>"10",
            "style"=>"background:red",
            "value"=>  $this->input->post("userpassv")
        );
        $usermail=array(
            "name"=>"usermail",
            "id"=>"usermail",
            "maxlength"=>"50",
            "size"=>"35",
            "value"=>  $this->input->post("usermail")
        );
        $auser=array();
        $auser["username"]=$username;
        $auser["userpass"]=$userpass;
        $auser["userpassv"]=$userpassv;
        $auser["usermail"]=$usermail;
        return $auser;
    }
    
    function userrules(){
        $arules=array(
            array("field"=>"username","label"=>"Nama User","rules"=>"trim|required|min_length[5]|max_length[15]|xss_celan"),
            array("field"=>"userpass","label"=>"Password","rules"=>"trim|required|matches[userpassv]|md5"),
            array("field"=>"userpassv","label"=>"Konfirmasi","rules"=>"trim|required"),
            array("field"=>"usermail","label"=>"Email","rules"=>"trim|required|valid_email")
        );
        return $arules;
    }
}
