<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_mycal
 *
 * @author Oka
 */
class c_mycal extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper(array("html","form","url","text"));
    }
    
    function index(){
        $this->load->library("calendar");
        $data["varkal"]=$this->calendar->generate();
        $data["judulapp"]="Kalender Dengan Library Calendar!";
        $this->load->view("v_c_mycal",$data);
    }
    
    function haribesar(){
        $tahun=2012;
        $bulan='04';
        $this->load->library("calendar");
        $aharibesar=array(
            21=>  site_url()."/c_mycal/infohari/$tahun/$bulan/21"
        );
        $data["varkal"]=  $this->calendar->generate($tahun,$bulan,$aharibesar);
        $data["judulapp"]="Kalender Hari Besar";
        $this->load->view("v_c_mycal",$data);
    }
    
    function infohari($tahun,$bulan,$tgl){
        $ainfohari=array(
            '20120421'=>"Hari Kartini",
            '20120502'=>"Hari Pendidikan Nasional",
            '20120520'=>"Hari Kebangkitan Nasional"
        );
        $data["infohari"]=$ainfohari[$tahun.$bulan.$tgl];
        $data["tahun"]=$tahun;
        $data["bulan"]=$bulan;
        $data["tgl"]=$tgl;
        $data["judulapp"]="Info Hari Besar!";
        $this->load->view("v_c_mycal_haribesar",$data);
    }
    
    function show(){
        $pref=array(
            'show_next_prev'=>TRUE,
            'next_prev_url'=>  site_url().'/c_mycal/show/'
        );
        $this->load->library('calendar',$pref);
        $data["varkal"]=  $this->calendar->generate($this->uri->segment(3),  $this->uri->segment(4));
        $data["judulapp"]="Navigasi Kalender!";
        $this->load->view("v_c_mycal",$data);        
    }

    function tahun($tahun=2012){
        $this->load->library('calendar');
        $abulan=array();
        for($i=1;$i<=12;$i++){
            $bulan=  str_pad($i,2,'0',STR_PAD_LEFT);
            $abulan[$bulan]=  $this->calendar->generate($tahun,$bulan);
        }
        $data["varkal"]=$abulan;
        $data["judulapp"]="Kalendear Tahun $tahun";
        $this->load->view("v_c_mycal_tahun",$data);
    }
}
