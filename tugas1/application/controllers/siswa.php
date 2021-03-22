<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class siswa extends CI_Controller {
    
        public function _construct()
        {
            //digunakan untuk menjalankan fungsi construct pada class parrent_controller;
            parent::_construct();
            $this->load->database();
            $this->load->library('form_validation');

            if($this->session->userdata('level') != "admin"){
                redirect('loginsiswa', 'refresh');
            }
        }
        
        public function index()
        {
            $this->load->model('siswa_model');

            //modul untuk load database
            //$this->load->database();
            $data ['title'] = 'List Siswa';
            $data ['siswa'] = $this->siswa_model->getAllsiswa();
            if($this->input->post('keyword')){
                $data['siswa'] = $this->siswa_model->cariDataSiswa();
            }
            $this->load->view('template/headersiswa', $data);
            $this->load->view('siswa/index', $data);
            $this->load->view('template/footer');
        }

        public function tambah(){
            $this->load->library('form_validation');
            $data ['title'] = 'Form Menambahkan Data ';
            $this->form_validation->set_rules('no', 'no', 'required|numeric');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('jeniskelamin', 'jeniskelamin', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/headersiswa', $data);
                $this->load->view('siswa/tambah', $data);
                $this->load->view('template/footer');
            }
            else{
                $this->load->model('siswa_model');
                $this->siswa_model->tambahdatassw();
                $this->session->set_flashdata('flash-data','ditambahkan');
                redirect('siswa','refresh');
                
            }
        }

        public function hapus($id){
            $this->load->library('session');
            $this->load->model('siswa_model');
            $this->siswa_model->hapusdatassw($id);
            $this->session->set_flashdata('flash-data','dihapus');
            redirect('siswa','refresh');
        }

        public function detail($id){
            $this->load->model('siswa_model');
            $data ['title'] = 'Detail Siswa';
            $data ['siswa'] = $this->siswa_model->getsiswaByID($id);
            $this->load->view('template/headersiswa', $data);
            $this->load->view('siswa/detail', $data);
            $this->load->view('template/footer');
        }

        public function edit($id){
            $this->load->library('form_validation');
            $this->load->model('siswa_model');
            $data ['title'] = 'Form Edit Data Mahasiswa';
            $data ['siswa'] = $this->siswa_model->getsiswaByID($id);

            $this->form_validation->set_rules('id', 'id', 'required|numeric');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            $this->form_validation->set_rules('nim', 'nim', 'required|numeric');

            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/headersiswa', $data);
                $this->load->view('siswa/edit', $data);
                $this->load->view('template/footer');
            }
            else{
                $this->load->model('siswa_model');
                $this->load->library('session');
                $this->siswa_model->ubahdatassw();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('siswa','refresh');
                echo "Data Berhasil Diubah";
                
            }
        }
    

    
    }
    
    /* End of file Controllername.php */
?>