<?php
class c_dbacrud extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper(array("html","form","url","text"));
        $this->load->model("m_dbacrud","tabel");
    }
    
    function showallrecord(){
		echo "Warsun";
        $data["hslquery"]=$this->tabel->getallrecord();
        $data["judulapp"]="Show All With Active Record";
        $this->load->view("v_cdbacrud_allrec",$data);
    }
}
?>