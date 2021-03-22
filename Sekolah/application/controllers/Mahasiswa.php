<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Mahasiswa extends CI_Controller {
  
    
    public function __construct()
    {
      parent::__construct();
      $this->load->model('mahasiswa_model');
      $this->load->model('modelCetak');
    }
    

    public function index(){
      $data ['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();
      if ($this->input->post('keyword')) {
        # code...
        $data['mahasiswa'] = $this->mahasiswa_model->cariDatamahasiswa();
      }
      $this->load->view('template/header',$data);
      $this->load->view('mahasiswa/index',$data);
      $this->load->view('template/footer');
    }

    public function user(){
      $data = array(
        "title" => 'Data Guru',
        "mahasiswa" => $this->mahasiswa_model->datatables()
      );
      $this->load->view('template/headerTable',$data);
      $this->load->view('mahasiswa/user',$data);
      $this->load->view('template/footerTable');
    }

    public function tambah(){
      $data ['jurusan'] = array("Informatika","Kimia","Mesin");
      $this->form_validation->set_rules('nama', 'Nama', array('required', 'min_length[4]'));
      $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      if ($this->form_validation->run() == FALSE) {
        # code...
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/tambah',$data);
        $this->load->view('template/footer');
      } else {
        # code...
        $this->mahasiswa_model->tambaDataMhs();
        redirect('mahasiswa','refresh');
      }
    }

    public function hapus($id){
      $this->mahasiswa_model->hapusDataMhs($id);
      $this->session->set_flashdata('flash-data', 'dihapus');
      redirect('mahasiswa','refresh');     
    }

    public function detail($id){
      $data['mahasiswa'] = $this->mahasiswa_model->getMahasiswaById($id);
      $this->load->view('template/header',$data);
      $this->load->view('mahasiswa/detail',$data);
      $this->load->view('template/footer');
    }

    public function edit($id){
      $data ['mahasiswa'] = $this->mahasiswa_model->getMahasiswaById($id);
      $data ['jurusan'] = array("Informatika","Kimia","Mesin");
      $this->form_validation->set_rules('nama', 'Nama', array('required', 'min_length[4]'));
      $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      if ($this->form_validation->run() == FALSE) {
        # code...
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/edit',$data);
        $this->load->view('template/footer');
      } else {
        # code...
        $this->mahasiswa_model->ubahDataMhs();
        redirect('mahasiswa','refresh');
      }
    }

    public function laporan_pdf(){

      $this->load->library('pdf');
      
      $data['mahasiswa'] = $this->modelCetak->view();
  
      $this->pdf->setPaper('A4', 'potrait');
      $this->pdf->filename = "laporan-petanikode.pdf";
      $this->pdf->load_view('mahasiswa/laporan', $data);
    }
  
  }
  /* End of file Mahasiswa.php */
  ?>