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
class m_formlogin extends CI_Model{
   
    function formuser(){
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
        $auser=array();
        $auser["username"]=$username;
        $auser["userpass"]=$userpass;
        return $auser;
    }
    
    function cekuser($username,$userpass){
        $errmessage="";
        if(!(empty($username) && empty($userpass))){
            if($username=="admin" && $userpass=="nimda"){
                $errmessage="Sukses!";
            }else{
                $errmessage="Gagal! Nama pengguna atau kata kunci salah! Ulangi lagi!";
            }
        }else $errmessage="firsttime";
        
        return $errmessage;
    }
}
