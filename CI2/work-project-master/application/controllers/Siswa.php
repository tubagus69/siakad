<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Siswa extends CI_Controller {
  
    public function __construct()
    {
      parent::__construct();
      $this->load->model('siswa_model');
      $this->load->model('modelCetak');
    }
    
    public function index()
    {
      $this->load->model('siswa_model');
      $data ['siswa'] = $this->siswa_model->getAllSiswa();
      if ($this->input->post('keyword')) {
        # code...
        $data['siswa'] = $this->siswa_model->cariDataSiswa();
      }
      $this->load->view('template/header',$data);
      $this->load->view('siswa/index');
      $this->load->view('template/footer');
    }
    
    public function admin(){
      $data = array(
        "title" => 'Data Mahasiswa',
        "siswa" => $this->siswa_model->datatables()
      );
      $this->load->view('template/headerTable',$data);
      $this->load->view('siswa/admin',$data);
      $this->load->view('template/footerTable');
    }

    public function tambah(){
      $this->load->library('form_validation');
      $this->form_validation->set_rules('id', 'Id', array('required', 'min_length[4]'));
      $this->form_validation->set_rules('nama', 'Nama', array('required', 'min_length[4]'));
      $this->form_validation->set_rules('alamat', 'Alamat', array('required', 'min_length[4]'));
      $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
      if ($this->form_validation->run() == FALSE) {
        # code...
        $this->load->view('template/header');
        $this->load->view('siswa/tambah');
        $this->load->view('template/footer');
      } else {
        # code...
        $this->siswa_model->tambaDataSiswa();
        redirect('siswa','refresh');
      }
    }

    public function hapus($id){
      $this->siswa_model->hapusDataSiswa($id);
      $this->session->set_flashdata('flash-data', 'dihapus');
      redirect('siswa','refresh');     
    }

    public function detail($id){
      $data['siswa'] = $this->siswa_model->getDataSiswaById($id);
      $this->load->view('template/header',$data);
      $this->load->view('siswa/detail',$data);
      $this->load->view('template/footer');
    }

    public function edit($id){
      $data['siswa'] = $this->siswa_model->getDataSiswaById($id);
      $this->form_validation->set_rules('nama', 'Nama', array('required', 'min_length[4]'));
      $this->form_validation->set_rules('alamat', 'Alamat', array('required', 'min_length[4]'));
      $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
      if ($this->form_validation->run() == FALSE) {
        # code...
        $this->load->view('template/header',$data);
        $this->load->view('siswa/edit',$data);
        $this->load->view('template/footer');
      } else {
        # code...
        $this->siswa_model->editDataSiswa();
        redirect('siswa','refresh');
      }
      
    }

    public function laporan_pdf(){

      $this->load->library('pdf');
      
      $data['siswa'] = $this->modelCetak->cetakSiswa();
  
      $this->pdf->setPaper('A4', 'potrait');
      $this->pdf->filename = "laporan-petanikode.pdf";
      $this->pdf->load_view('siswa/laporan', $data);
    }

  }
  
  /* End of file Siswa.php */
  
?>