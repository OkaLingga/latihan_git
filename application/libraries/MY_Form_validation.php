<?php
if(!defined('BASEPATH')) exit ('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Form_validation
 *
 * @author oka.lingga
 */
class MY_Form_validation extends CI_Form_validation{
    public function __construct() {
        parent::__construct();
    }
    
    public function valid_username($username){
        return ((preg_match("/^[a-zA-Z0-9]+$/", $username))?true:false);
    }
}
