<?php
class c_dbqcrud extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper(array("html","form","url","text"));
        $this->load->model("m_dbqcrud");
    }
    
    function index(){
        $data["judulapp"]="Aplikasi CRUD Data Teman";
        $data["message"]="";
        $this->load->view("v_cdbqcrud_message",$data);
    }
    
    function tambahdata(){
        $adata=array(
            "NoTeman"=>7,
            "NamaTeman"=>"Sabiq",
            "NoTelp"=>"0855555555",
            "Email"=>"sabiq@gmail.com"
        );
        $data["hslquery"]=$this->m_dbqcrud->tambah($adata);
        $data["judulapp"]="Tambah Data";
        $hsltambah=($data["hslquery"])?"Berhasil ditambahkan!":"Gagal ditambahkan!";
        echo $data["judulapp"];
        echo $hsltambah;
        echo anchor("c_dbmteman/baca","Tampil Seluruh Data");
    }
    
    function formadd(){
        $data=$this->m_dbqcrud->defform();
        $data["judulapp"]="Tambah Data";
        $data["scriptaksi"]="c_dbqcrud/tambahdariform";
        $this->load->view("v_cdbqcrud_form",$data);
    }
    
    function tambahdariform(){
        $data["adata"]=$this->m_dbqcrud->readinput();
        $data["hslquery"]=$this->m_dbqcrud->tambah($data["adata"]);
        $data["judulapp"]="Tambah Data";
        $data["message"]=($data["hslquery"])?"Berhasil ditambahkan!":"Gagal ditambahkan!";
        $this->load->view("v_cdbqcrud_message",$data);
    }
    
    function getnoteman($aksi="update"){
        $data["aksi"]=$aksi;
        $data["judulapp"]="Masukkan No Teman Untuk di$aksi";
        $data["scriptaksi"]="c_dbqcrud/form$aksi";
        $this->load->view("v_cdbqcrud_getnoteman",$data);
    }

    function formupdate(){
        $noteman=$this->input->post("noteman");
        $jrow=0;
        if(!empty($noteman)){
            $hslquery=$this->m_dbqcrud->getrecord($noteman);
            $jrow=$hslquery->num_rows();
        }
        if($jrow>0){
            $data=$this->m_dbqcrud->defform();
            $row=$hslquery->row_array(0);
            $data["noteman"]["value"]=$row["NoTeman"];
            $data["namateman"]["value"]=$row["NamaTeman"];
            $data["notelp"]["value"]=$row["NoTelp"];
            $data["email"]["value"]=$row["Email"];
            $data["judulapp"]="Update Data";
            $data["scriptaksi"]="c_dbqcrud/updatedariform";
            $this->load->view("v_cdbqcrud_form",$data);
        }else{
            $this->getnoteman("update");
        }
    }
    
    function updatedariform(){
        $data["adata"]=$this->m_dbqcrud->readinput();
        $data["hslquery"]=$this->m_dbqcrud->update($data["adata"]);
        $data["judulapp"]="Update Data";
        $data["message"]=($data["hslquery"])?"Berhasil diupdate!":"Gagal diupdate!";
        $this->load->view("v_cdbqcrud_message",$data);
    }
    
    function formdelete(){
       $noteman=$this->input->post("noteman");
        $jrow=0;
        if(!empty($noteman)){
            $hslquery=$this->m_dbqcrud->getrecord($noteman);
            $jrow=$hslquery->num_rows();
        }
        if($jrow>0){
            $data=array();
            $row=$hslquery->row_array(0);
            $data["noteman"]=$row["NoTeman"];
            $data["namateman"]=$row["NamaTeman"];
            $data["notelp"]=$row["NoTelp"];
            $data["email"]=$row["Email"];
            $data["judulapp"]="Delete Data";
            $data["scriptaksi"]="c_dbqcrud/deletedariform";
            $this->load->view("v_cdbqcrud_todel",$data);
        }else{
            $this->getnoteman("delete");
        }
    }
    
    function deletedariform(){
        $btn2Del=$this->input->post("btn2Del");
        $data["noteman"]=$this->input->post("noteman");
        if($btn2Del=="Hapus"){
            $hslquery=$this->m_dbqcrud->getrecord($data["noteman"]);
            $row=$hslquery->row_array(0);
            $data["adata"]["noteman"]=$row["NoTeman"];
            $data["adata"]["namateman"]=$row["NamaTeman"];
            $data["adata"]["notelp"]=$row["NoTelp"];
            $data["adata"]["email"]=$row["Email"];
            $data["judulapp"]="Delete Data";
            $data["hslquery"]=$this->m_dbqcrud->delete($data["noteman"]);
            $data["message"]=($data["hslquery"])?"Berhasil didelete!":"Gagal didelete!";
            $this->load->view("v_cdbqcrud_message",$data);
        }else{
            $this->getnoteman("delete");
        }
    }
}
?>