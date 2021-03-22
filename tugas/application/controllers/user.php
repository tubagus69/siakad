<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function _construct()
    {
        parent::_construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        

        if($this->session->userdata('level') != "user"){
            redirect('login', 'refresh');
        }
    }

    public function index(){
        $data=array(
            'title' => 'data mahasiswa',
            $this->load->model('mahasiswa_model'),
            'mahasiswa' => $this->mahasiswa_model->datatabels()
        );
        $this->load->view('template/header_datatabels_user', $data);
        $this->load->view('mahasiswa/user',$data);
        $this->load->view('template/footer_datatabels_user');
        
    }

    public function laporan_pdf(){
        $this->load->library('pdf');

        $this->load->model('cetak_model');
        $data['mahasiswa'] = $this->cetak_model->view();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('mahasiswa/laporan', $data);
    }

}

/* End of file user.php */

?>