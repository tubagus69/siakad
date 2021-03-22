<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Home extends CI_Controller {
 
     public function index($name='ADE')
     {
       $data['title'] ='Home';
        $this->load->view('template/header',$data);
        $data['name'] =$name;
        //echo "Selamat Datang Di Halaman Home ";
         $this->load->view('home/index',$data);
         $this->load->view('template/footer');


     }
     public function belajar()
    {
        $data['title']='Belajar';
        $this->load->view('template/header',$data);
        $this->load->view('belajar/index',$data);
        $this->load->view('template/footer');
    } 
 }
 
 /* End of file Controllername.php */
 
?>