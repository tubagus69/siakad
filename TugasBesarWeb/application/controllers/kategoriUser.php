<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class kategoriUser extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/TugasBesarWeb/Kategori";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    public function index()
    {
        $data['title'] = 'Halaman Kategori User';
        $data['kategori'] = json_decode($this->curl->simple_get($this->API));
        $this->load->view('User/kategori/index', $data);
        $this->load->view('user/template/header_datatables_user');
        $this->load->view('user/template/footer_datatables_user');
   
    }

}