<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class pasien extends CI_Controller {
    
        public function _construct()
        {
            //digunakan untuk menjalankan fungsi construct pada class parrent_controller;
            parent::_construct();
            $this->load->model('pasien_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level') != "admin"){
                redirect('login', 'refresh');
            }
        }
        
        public function index()
        {
            $this->load->model('pasien_model');

            //modul untuk load database
            //$this->load->database();
            $data ['title'] = 'List pasien';
            $data ['pasien'] = $this->pasien_model->getAllpasien();
            if($this->input->post('keyword')){
                $data['pasien'] = $this->pasien_model->cariDatapasien();
            }
            
            $this->load->view('template/header', $data);
            $this->load->view('pasien/index', $data);
            $this->load->view('template/footer');
        }

        public function tambah(){
            $this->load->library('form_validation');
            $data ['title'] = 'Form Menambahkan Data';
            

            $this->form_validation->set_rules('no', 'no', 'required|numeric');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('jeniskelamin', 'jeniskelamin', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            $this->form_validation->set_rules('norekammedik', 'norekammedik', 'required');
            $this->form_validation->set_rules('tanggalkedokter', 'tanggalkedokter', 'required');
            $this->form_validation->set_rules('diagnosa', 'diagnosa', 'required');
            $this->form_validation->set_rules('penanganan', 'penanganan', 'required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/header', $data);
                $this->load->view('pasien/tambah', $data);
                $this->load->view('template/footer');
            }
            else{
                $this->load->model('pasien_model');
                $this->pasien_model->tambahdatapsn();
                $this->session->set_flashdata('flash-data','ditambahkan');
                redirect('pasien','refresh');
                
            }
        }

        public function hapus($no){
            $this->load->library('session');
            $this->load->model('pasien_model');
            $this->pasien_model->hapusdatapsn($no);
            $this->session->set_flashdata('flash-data','dihapus');
            redirect('pasien','refresh');
        }

        public function detail($no){
            $this->load->model('pasien_model');
            $data ['title'] = 'Detail pasien';
            $data ['pasien'] = $this->pasien_model->getpasienByID($no);
            $this->load->view('template/header', $data);
            $this->load->view('pasien/detail', $data);
            $this->load->view('template/footer');
        }

        public function edit($no){
            $this->load->library('form_validation');
            $this->load->model('pasien_model');
            $data ['title'] = 'Form Edit Data Mahasiswa';
            $data ['pasien'] = $this->pasien_model->getpasienByID($no);
            

            $this->form_validation->set_rules('no', 'no', 'required|numeric');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('jeniskelamin', 'jeniskelamin', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            $this->form_validation->set_rules('norekammedik', 'norekammedik', 'required');
            $this->form_validation->set_rules('tanggalkedokter', 'tanggalkedokter', 'required');
            $this->form_validation->set_rules('diagnosa', 'diagnosa', 'required');
            $this->form_validation->set_rules('penanganan', 'penanganan', 'required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/header', $data);
                $this->load->view('pasien/edit', $data);
                $this->load->view('template/footer');
            }
            else{
                $this->load->model('pasien_model');
                $this->load->library('session');
                $this->pasien_model->ubahdatapsn();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('pasien','refresh');
                echo "Data Berhasil Diubah";
                
            }
        }
    
    }
    
    /* End of file Controllername.php */
?>