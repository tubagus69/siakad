<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class mahasiswa extends CI_Controller {
    
        public function _construct()
        {
            //digunakan untuk menjalankan fungsi construct pada class parrent_controller;
            parent::_construct();
            $this->load->model('mahasiswa_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level') != "admin"){
                redirect('login', 'refresh');
            }
        }
        
        public function index()
        {
            $this->load->model('mahasiswa_model');

            //modul untuk load database
            //$this->load->database();
            $data ['title'] = 'List Mahasiswa';
            $data ['mahasiswa'] = $this->mahasiswa_model->getAllmahasiswa();
            if($this->input->post('keyword')){
                $data['mahasiswa'] = $this->mahasiswa_model->cariDataMahasiswa();
            }
            
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('template/footer');
        }

        public function tambah(){
            $this->load->library('form_validation');
            $data ['title'] = 'Form Menambahkan Data Mahasiswa';
            $data ['jurusan'] = ['Teknik Informatika' , 'Teknik Kimia' , 'Teknik Industri' , 'Teknik Mesin'];

            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('nim', 'nim', 'required|numeric');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/header', $data);
                $this->load->view('mahasiswa/tambah', $data);
                $this->load->view('template/footer');
            }
            else{
                $this->load->model('mahasiswa_model');
                $this->mahasiswa_model->tambahdatamhs();
                $this->session->set_flashdata('flash-data','ditambahkan');
                redirect('mahasiswa','refresh');
                
            }
        }

        public function hapus($id){
            $this->load->library('session');
            $this->load->model('mahasiswa_model');
            $this->mahasiswa_model->hapusdatamhs($id);
            $this->session->set_flashdata('flash-data','dihapus');
            redirect('mahasiswa','refresh');
        }

        public function detail($id){
            $this->load->model('mahasiswa_model');
            $data ['title'] = 'Detail Mahasiswa';
            $data ['mahasiswa'] = $this->mahasiswa_model->getmahasiswaByID($id);
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/detail', $data);
            $this->load->view('template/footer');
        }

        public function edit($id){
            $this->load->library('form_validation');
            $this->load->model('mahasiswa_model');
            $data ['title'] = 'Form Edit Data Mahasiswa';
            $data ['mahasiswa'] = $this->mahasiswa_model->getmahasiswaByID($id);
            $data ['jurusan'] = ['Teknik Informatika', 'Teknik Kimia', 'Teknik Industri', 'Teknik Mesin'];

            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('nim', 'nim', 'required|numeric');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/header', $data);
                $this->load->view('mahasiswa/edit', $data);
                $this->load->view('template/footer');
            }
            else{
                $this->load->model('mahasiswa_model');
                $this->load->library('session');
                $this->mahasiswa_model->ubahdatamhs();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('mahasiswa','refresh');
                echo "Data Berhasil Diubah";
                
            }
        }
    
    }
    
    /* End of file Controllername.php */
?>