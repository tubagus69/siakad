<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homesiswa extends CI_Controller {

    public function index ($name='')
    {
        $data ['title'] ='Homesiswa';
        //$data ['name'] = $name;
        $this->load->view('template/headersiswa', $data);
        //echo "Selamat Datang di Halaman Home";
        $this->load->view('home/index', $data);
        $this->load->view('template/footer');
        $this->load->library('session');

        if($this->session->userdata('level') != "admin"){
            redirect('loginsiswa', 'refresh');
        }
    } 

   
}

/* End of file Controllername.php */
?>