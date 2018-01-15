<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of email
 *
 * @author oka.lingga
 */
class c_email extends CI_Controller{
    //put your code here
    function sendMail() {
        date_default_timezone_set("Asia/Jakarta");
        $this->load->library('email');
//        $configs = array(
//            'protocol' => 'smtp',
//            'smtp_host' => 'ssl://smtp.gmail.com',
//            'smtp_port' => 465,
//            'smtp_user' => 'oka.kencan@gmail.com',// your mail name
//            'smtp_pass' => '30071990',
//            'mailtype'  => 'html', 
//            'charset'   => 'iso-8859-1',
//             'wordwrap' => TRUE
//        );
        $configs = array(
            'protocol' => 'smtp',
            'smtp_host' => '10.204.52.154',
            'smtp_port' => 25,
            'smtp_user' => '',// your mail name
            'smtp_pass' => '',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1',
             'wordwrap' => TRUE
        );
        
        $this->email->initialize($configs);
 
        $this->email->from('cashrecon.dept@bankmandiri.co.id', 'Cash Reconciliation Department');
        $list = array('oka.kencan@gmail.com','oka.lingga@bankmandiri.co.id');
        $this->email->to($list);
        $this->email->subject('Tes CodeIgniter');
        $this->email->message('Kie Uji coba sekang Gmail');
        if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
        
//        $subject='Hi There!!';
//        $to='oka.lingga@bankmandiri.co.id';
//        $body='This is my demo email sent using PHP on XAMPP version 1.7.3';
//        if (mail($to,$subject,$body))
//        echo 'Mail sent successfully!';
//        else
//        echo 'Mail not sent!';
    }
}
