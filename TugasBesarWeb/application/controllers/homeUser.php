<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class homeUser extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function index()
    {
        $data['title'] = 'Halaman Home User';
        
        $this->load->view('user/template/header');
        $this->load->view('User/home/index', $data);
        $this->load->view('user/template/footer');
        $this->load->view('user/template/header_datatables_user');
        $this->load->view('user/template/footer_datatables_user');
   
    }

}