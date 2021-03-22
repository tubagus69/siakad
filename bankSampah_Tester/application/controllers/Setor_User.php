<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setor_User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        // $this->load->database();
        $this->load->model('User_Setor_model');
    }

    public function index()
    {

        $this->load->model('User_Setor_model');
        // modul untuk database

        $data['title'] = 'Form User Menyetor Sampah';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_sampah', 'Jenis_Sampah', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('harga_per_kg', 'Harga_per_kg', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('jmlh_kg', 'Jmlh_kg', 'required');
        $this->form_validation->set_rules('total_harga', 'Total_harga', 'required');
        $this->form_validation->set_rules('tgl_setor', 'Tgl_setor', 'required');
        $data['jenis_sampah'] = ['Botol', 'Kertas', 'Tembaga', 'Besi', 'Plastik', 'Kaleng', 'Elektronik', 'Aluminium', 'Campur'];

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('user/user_setor', $data);
            $this->load->view('templates/footer');
        } else {
            #code...
            $this->User_Setor_model->tambahDataSetorUser();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('Setor_User', 'refresh');
        }
        //var_dump($data['Setor_User']);

    }
}


/* End of file JemputSampah.php */
