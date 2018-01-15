<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_tblteman
 *
 * @author oka.lingga
 */
class c_tblteman extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper(array("html","form","url","text"));
    }
    
    function index(){
        $this->load->library("table");
        $atelpteman=array(
            array("Ilham","8055454545"),
            array("Warsun","8055454545"),
            array("Liun","8055454545"),
            array("Hendra","8055454545"),
            array("Adi","8055454545"),
            array("Unggul","8055454545"),
        );
        $this->table->set_heading(array("Nama","No Telp"));
        $data["vartbl"]=  $this->table->generate($atelpteman);
        $data["judulapp"]="Tabel Data Teman";
        $this->load->view("v_c_tblteman",$data);
    }
    
    function usingaddrow(){
        $this->load->library("table");
        $this->table->set_heading(array("Nama","No Telp"));
        $this->table->add_row("Ilham","8055454545");
        $this->table->add_row("Warsun","8055454545");
        $this->table->add_row("Liun","8055454545");
        $this->table->add_row("Hendra","8055454545");
        $this->table->add_row("Adi","8055454545");
        $this->table->add_row("Unggul","8055454545");
        $data["vartbl"]=  $this->table->generate();
        $data["judulapp"]="Tabel Data Teman";
        $this->load->view("v_c_tblteman",$data);
    }

    function usingtamplate(){
        $this->load->library("table");
        $tmpl=array(
            'table_open'=>'<table border="1" cellpadding="4" cellspacing="0">',
            'heading_row_start'=>'<tr>',
            'heading_row_end'=>'</tr>',
            'heading_cell_start'=>'<th>',
            'heading_cell_end'=>'</th>',
            'row_start'=>'<tr>',
            'row_end'=>'</tr>',
            'cell_start'=>'<td>',
            'cell_end'=>'</td>',
            'row_alt_start'=>'<tr>',
            'row_alt_end'=>'</tr>',
            'cell_alt_start'=>'<td>',
            'cell_alt_end'=>'</td>',
            'table_close'=>'</table>'
        );
        $this->table->set_template($tmpl);
        $this->table->set_heading(array("Nama","No Telp"));
        $this->table->add_row("Ilham","8055454545");
        $this->table->add_row("Warsun","8055454545");
        $this->table->add_row("Liun","8055454545");
        $this->table->add_row("Hendra","8055454545");
        $this->table->add_row("Adi","8055454545");
        $this->table->add_row("Unggul","8055454545");
        $data["vartbl"]=  $this->table->generate();
        $data["judulapp"]="Tabel Data Teman";
        $this->load->view("v_c_tblteman",$data);
    }
    
    function usingparttamplate(){
        $this->load->library("table");
        $tmpl=array(
            'heading_cell_start'=>'<th style="background:cyan">'
        );
        $this->table->set_template($tmpl);
        $this->table->set_heading(array("Nama","No Telp"));
        $this->table->add_row("Ilham","8055454545");
        $this->table->add_row("Warsun","8055454545");
        $this->table->add_row("Liun","8055454545");
        $this->table->add_row("Hendra","8055454545");
        $this->table->add_row("Adi","8055454545");
        $this->table->add_row("Unggul","8055454545");
        $data["vartbl"]=  $this->table->generate();
        $data["judulapp"]="Tabel Data Teman";
        $this->load->view("v_c_tblteman",$data);
    }
}
