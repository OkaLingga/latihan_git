<?php
class m_dbacrud extends CI_Model{
    function __construct() {
        parent::__construct();
        $config["hostname"]="localhost";
        $config["dbdriver"]="mysql";
        $config["database"]="dbcibook";
        $config["username"]="root";
        $config["password"]="";
        $this->load->database($config);
    }
    
    function getallrecord(){
        return $this->db->get("tblteman");
    }
}
?>