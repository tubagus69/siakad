<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function index()
    {
        $data['title'] = 'Halaman Admin';
        $this->load->view('Admin/template/header_admin', $data);
        $this->load->view('Admin/template/sidebar_admin', $data);
        $this->load->view('Admin/home/index', $data);
        $this->load->view('Admin/template/footer_admin');
    }

}

/* End of file Controllername.php */
