<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    public function index()
    {
        $this->load->database;
        $data['title']='List Mahasiswa';
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/index');
        $this->load->view('template/footer');
    }

}


    /* End of file controllername.php */
    ?>