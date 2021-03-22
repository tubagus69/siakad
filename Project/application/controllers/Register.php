<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
        
        $this->load->view('template/header_register');
        $this->load->view('Register/register');
        $this->load->view('template/footer');
        
        
    }
    public function registrasi(){
        
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level'),
            // 'level' => 'user',
            'status' => 0
        );
        $this->load->model('login_model');
        $this->login_model->daftarRegistrasi($data);
        redirect('Login/index');
    }
    public function aktif(){
        $this->load->model('Mahasiswa_model');

        $data['user'] = $this->Mahasiswa_model->getUserUserUser();
        if ($this->input->post('keyword')){
            $data['user'] = $this->Mahasiswa_model->cariDataAdmin($this->input->post('keyword'));
        }
        $this->load->view('template/header');
        $this->load->view('register/aktif', $data);
        $this->load->view('template/footer');
    }

    public function nonaktifkanUser($id){
        $this->load->model('guru_model');
        $this->guru_model->hapusAdmin($id);
        
        redirect('register/aktif','refresh');
        
    }
    

}

/* End of fils Register.php */

?>