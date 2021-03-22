<?php
defined('BASEPATH') or exit('No direct script access allowed');
class login extends CI_Controller
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
     
        $data['title'] = "Login";
        $this->load->view('login/index', $data);
        $this->load->view('Admin/template/header_login');

    }
    public function post_process()
    {
            $data = array(
                'nama'              => $this->input->post('nama'),
                'username'          => $this->input->post('username'),
                'password'          => $this->input->post('password'),
                'level'          => $this->input->post('level'),
                'status'          => $this->input->post('status'),
                
            );
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data login Berhasil Ditambahkan');
        } else {
            $this->session->set_flashdata('result', 'Data login Gagal Ditambahkan');
        }
        redirect('login');
    }
    
    public function proses_login(){
        $url = $this->API."/login";
        $data = [
          'username' => htmlspecialchars($this->input->post('username')),
          'password' => htmlspecialchars($this->input->post('password')),
        ];
        $cek_login =  json_decode($this->curl->simple_post($url, $data));
        
        if($cek_login){
          foreach ($cek_login as $row) {
            # code...
            $this->session->set_userdata('username',$row->username);
            $this->session->set_userdata('level',$row->level);
            
          }
          if ($this->session->userdata('level') == 'admin') {
            # code...
            redirect('Admin');
          //home
          }
          if($this->session->userdata('level') == 'user'){
            redirect('HomeUser');
          }
        }else{
          $this->session->set_flashdata('message', 'Password salah');
          redirect('login');
          //redirect('login/index','refresh');
        }
      }
      
    
      public function logout(){
        $this->session->sess_destroy();
        redirect('login','refresh');
      }
}