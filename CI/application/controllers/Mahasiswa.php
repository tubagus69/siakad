<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Mahasiswa extends CI_Controller {
     
     public function __construct()
     {
         parent::__construct();
         //Do your magic here
         $this->load->model('mahasiswa_model');
         $this->load->library('form_validation');
         
         ;
     }
     
 
     public function index()
     {

         $this->load->model('mahasiswa_model');
         $data['title']='List Mahasiswa';
         $data['mahasiswa']=$this->mahasiswa_model->getAllmahasiswa();
         $data['siswa']=$this->mahasiswa_model->getAllsiswa();
         
         $this->load->view('template/header', $data);
         $this->load->view('Mahasiswa/index', $data);
         $this->load->view('template/footer');
         
         
         
     }
     public function tambah()
    {
        //$this->load->model('mahasiswa_model');
        //$this->load->database();
        $data['title']='Form Menambahkan Data Mahasiswa';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('Mahasiswa/tambah',$data);
            $this->load->view('template/footer');
        } else {
            $this->mahasiswa_model->tambahdatamhs();
            redirect('','refresh');
            
        }
    }

    public function hapus($id)
    {
        $this->mahasiswa_model->hapusdatamhs($id);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('','refresh');
        
    }
    public function detail($id){
        $data['title']='List Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getMahasiswaId($id);
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/detail',$data);
        $this->load->view('template/footer');
    }
    public function edit($id){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        if ($this->form_validation->run() == FALSE){
            $data['title']='List Mahasiswa';
            $data['mahasiswa']=$this->mahasiswa_model->getMahasiswaId($id);
            $this->load->view('template/header',$data);
            $this->load->view('mahasiswa/edit',$data);
            $this->load->view('template/footer');
        }else{
            $this->mahasiswa_model->editMahasiswa($id);
        }
    }
 
 }
 
 /* End of file Mahasiswa.php */
 
?>