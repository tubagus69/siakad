<?php
defined('BASEPATH') or exit('No direct script access allowed');
class register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->API = "http://localhost/TugasBesarWeb/User";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
     
    }
    public function index()
    {
     
        $data['title'] = "Register";
        $this->load->view('register/index', $data);
        $this->load->view('Admin/template/header_login');

    }
    public function reg_process(){
        // $this->API = "http://localhost/TugasBesarWeb/User";
        $data = array(
            'nama'              => $this->input->post('nama'),
            'username'          => $this->input->post('username'),
            'password'          => $this->input->post('password'),
            'level'             => 'user',
            'status'            => 'pasif',
            
        );
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data User Berhasil Ditambahkan Tunggu Validasi Admin');
            // echo "aaa";die();
        } else {
            $this->session->set_flashdata('result', 'Data login Gagal Ditambahkan');
            // echo "bbb";die();
        }
        redirect('login');
        
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('login','refresh');
      }
}    