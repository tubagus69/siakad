<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class LoginSiswa extends CI_Controller {
    
        public function __construct()
        {
          parent::__construct();
          $this->load->model('loginSiswa_model');
        }
        
      
        public function index()
        {
          $this->load->view('template/header_login');
          $this->load->view('login/siswaIndex');
          $this->load->view('template/footer');
        }
    
        public function proses_login(){
          $username = htmlspecialchars($this->input->post('username'));
          $password = htmlspecialchars($this->input->post('password'));
    
          $cek_login = $this->loginSiswa_model->login($username,$password);
    
          if($cek_login){
            foreach ($cek_login as $row) {
              # code...
              $this->session->set_userdata('user',$row->username);
              $this->session->set_userdata('level',$row->level);
            }
    
            if ($this->session->userdata('level') == 'siswa') {
              # code...
              redirect('siswa/index');
            }
            else{
              redirect('siswa/admin');
            }
    
          }else{
            $this->session->set_flashdata('message', 'Password salah');
            redirect('loginSiswa');
            //redirect('login/index','refresh');
          }
    
        }
    
        public function logout(){
          $this->session->sess_destroy();
          redirect('loginSiswa','refresh');
        }
      
    
    }
    
    /* End of file LoginSiswa.php */
    
?>