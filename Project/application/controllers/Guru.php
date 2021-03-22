  <?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Guru extends CI_Controller {
  
    
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
      $this->load->view('Guru/index',$data);
      $this->load->view('template/footer');
    }

    public function user(){
      $data = array(
        "title" => 'Data Pelatih',
        "mahasiswa" => $this->mahasiswa_model->datatables()
      );
      $this->load->view('template/headerTable',$data);
      $this->load->view('Guru/user',$data);
      $this->load->view('template/footerTable');
    }

    public function tambah(){
      $data ['jurusan'] = array("Kiper","Back","Midfielder","Striker");
      $this->form_validation->set_rules('nama', 'Nama', array('required', 'min_length[4]'));
      $this->form_validation->set_rules('nim', 'Nim', array('required', 'min_length[4]'));
      $this->form_validation->set_rules('email', 'Email', array('required', 'min_length[4]'));
      if ($this->form_validation->run() == FALSE) {
        # code...
        $this->load->view('template/header');
        $this->load->view('Guru/tambah',$data);
        $this->load->view('template/footer');
      } else {
        # code...
        $this->mahasiswa_model->tambaDataMhs();
        redirect('Guru','refresh');
      }
    }

    public function hapus($id){
      $this->mahasiswa_model->hapusDataMhs($id);
      $this->session->set_flashdata('flash-data', 'dihapus');
      redirect('Guru','refresh');     
    }

    public function detail($id){
      $data['mahasiswa'] = $this->mahasiswa_model->getMahasiswaById($id);
      $this->load->view('template/header',$data);
      $this->load->view('Guru/detail',$data);
      $this->load->view('template/footer');
    }

    public function edit($id){
      $data ['mahasiswa'] = $this->mahasiswa_model->getMahasiswaById($id);
      $data ['jurusan'] = array("Kiper","Back","Midfielder","Striker");
      $this->form_validation->set_rules('nama', 'Nama', array('required', 'min_length[4]'));
      $this->form_validation->set_rules('nim', 'Nim', array('required', 'min_length[4]'));
      $this->form_validation->set_rules('email', 'Email', array('required', 'min_length[4]'));
      if ($this->form_validation->run() == FALSE) {
        # code...
        $this->load->view('template/header',$data);
        $this->load->view('Guru/edit',$data);
        $this->load->view('template/footer');
      } else {
        # code...
        $this->mahasiswa_model->ubahDataMhs();
        redirect('Guru','refresh');
      }
    }

    public function laporan_pdf(){

      $this->load->library('pdf');
      
      $data['mahasiswa'] = $this->modelCetak->view();
  
      $this->pdf->setPaper('A4', 'potrait');
      $this->pdf->filename = "laporan-petanikode.pdf";
      $this->pdf->load_view('Guru/laporan', $data);
    }
  
  }
  /* End of file Mahasiswa.php */
  ?>