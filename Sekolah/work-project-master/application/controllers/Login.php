<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Login extends CI_Controller {

    
    public function __construct()
    {
      parent::__construct();
      $this->load->model('login_model');
      
    }
    
  
    public function index()
    {
      $this->load->view('template/header_login');
      $this->load->view('login/index');
      $this->load->view('template/footer');
    }

    public function proses_login(){
      $username = htmlspecialchars($this->input->post('username'));
      $password = htmlspecialchars($this->input->post('password'));

      $cek_login = $this->login_model->login($username,$password);

      if($cek_login){
        foreach ($cek_login as $row) {
          # code...
          $this->session->set_userdata('user',$row->username);
          $this->session->set_userdata('level',$row->level);
        }

        if ($this->session->userdata('level') == 'admin') {
          # code...
          redirect('mahasiswa/index');
        }
        else{
          redirect('mahasiswa/user');
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
  
  /* End of file Login.php */
  
?>