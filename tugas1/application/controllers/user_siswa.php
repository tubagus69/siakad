<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user_siswa extends CI_Controller {

    public function _construct()
    {
        parent::_construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('loginsiswa_model');

        if($this->session->userdata('level') != "user_siswa"){
            redirect('loginsiswa', 'refresh');
        }
    }

    public function index(){
        $data=array(
            'title' => 'data siswa',
            $this->load->model('siswa_model'),
            'siswa' => $this->siswa_model->datatabels()
        );
        $this->load->view('template/header_datatabels_usersiswa', $data);
        $this->load->view('siswa/user_siswa',$data);
        $this->load->view('template/footer_datatabels_user');

    }

    public function laporan_pdf(){
        $this->load->library('pdf');

        $this->load->model('cetaksiswa_model');
        $data['siswa'] = $this->cetaksiswa_model->view();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('siswa/laporansiswa', $data);
    }
}
?>