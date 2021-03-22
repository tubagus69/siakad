<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('Skill_model');
      $this->load->model('modelCetak');
    }

    

    public function index()
    {
      $this->load->model('Skill_model');
      $data ['pemain'] = $this->Skill_model->getAllSkill();
      if ($this->input->post('keyword')) {
        # code...
        $data['pemain'] = $this->Skill_model->cariDataSkill();
      }
      $this->load->view('template/header',$data);
      $this->load->view('Skill/index',$data);
      $this->load->view('template/footer');
    }
    public function user(){
        $data = array(
          "title" => 'Data Skill Pemain',
          "pemain" => $this->Skill_model->datatables()
        );
        $this->load->view('template/headerTable',$data);
        $this->load->view('Skill/user',$data);
        $this->load->view('template/footerTable');
    }
    public function admin(){
      $data = array(
        "title" => 'Data Pemain',
        "siswa" => $this->siswa_model->datatables()
      );
      $this->load->view('template/headerTable',$data);
      $this->load->view('Skill/index',$data);
      $this->load->view('template/footerTable');
    }
    

    public function tambah(){
        
  
        $this->load->library('form_validation');
        // $this->form_validation->set_rules('id', 'Id', array('required', 'min_length[4]'));
        $this->form_validation->set_rules('nama', 'Nama', array('required'));
        $this->form_validation->set_rules('speed', 'Speed', array('required'));
        $this->form_validation->set_rules('drible', 'Dribble', array('required'));      
        $this->form_validation->set_rules('power', 'Power', array('required'));

        if ($this->form_validation->run() == FALSE) {
          # code...
          $this->load->view('template/header');
          $this->load->view('Skill/tambah');
          $this->load->view('template/footer');
        } else {
          # code...
          $this->Skill_model->tambaDataSkill();
          redirect('Skill','refresh');
        }
      }
  
      public function hapus($id){
        $this->Skill_model->hapusDataSkill($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('Skill','refresh');     
      }
  
      public function detail($id){
        $data['pemain'] = $this->Skill_model->getDataSkillById($id);
        $this->load->view('template/header',$data);
        $this->load->view('Skill/detail',$data);
        $this->load->view('template/footer');
      }

      public function edit($id){
        
        $data['pemain'] = $this->Skill_model->getDataSkillById($id);
         // $this->form_validation->set_rules('id', 'Id', array('required', 'min_length[4]'));
         $this->form_validation->set_rules('nama', 'Nama', array('required'));
         $this->form_validation->set_rules('speed', 'Speed', array('required'));
         $this->form_validation->set_rules('drible', 'Dribble', array('required'));
         $this->form_validation->set_rules('power', 'Power', array('required'));
        if ($this->form_validation->run() == FALSE) {
          # code...
          $this->load->view('template/header');
          $this->load->view('Skill/edit',$data);
          $this->load->view('template/footer');
        } else {
          # code...
          $this->Skill_model->editDataSKill();
          redirect('Skill','refresh');
        }
        
      }

      public function laporan_pdf(){

        $this->load->library('pdf');
        
        
        $data['pemain'] = $this->modelCetak->Skill();
    
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('Skill/laporan', $data);
      }
      

}

/* End of file Skill.php */
