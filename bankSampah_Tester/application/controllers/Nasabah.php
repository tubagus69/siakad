<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nasabah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        // $this->load->database();
        $this->load->model('Nasabah_model');
    }

    public function index()
    {

        $this->load->model('Nasabah_model');
        // modul untuk database

        $data['title'] = 'Bank Sampah Tumpang';
        $data['nasabah'] = $this->Nasabah_model->getAllNasabah();
        if ($this->input->post('keyword')) {
            $data['nasabah'] = $this->Nasabah_model->cariDataNasabah();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index_nasabah', $data);
        $this->load->view('templates/footer');
        //var_dump($data['nasabah']);

    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Nasabah';
        $data['nasabah'] = $this->Nasabah_model->getAllNasabah();
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('noTelp', 'NoTelp', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/add_nasabah', $data);
            $this->load->view('templates/footer');
        } else {
            #code...
            $this->Nasabah_model->tambahDataNasabah();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('nasabah', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->Nasabah_model->hapusdatanasabah($id);
        //untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('nasabah', 'refersh');
    }
    public function detail($id)
    {

        $data['title'] = 'Detail Nasabah';
        $data['nasabah'] = $this->Nasabah_model->getNasabahByID($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail_nasabah', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {
        $data['title'] = 'Form Edit Data Nasabah';
        $data['nasabah'] = $this->Nasabah_model->getNasabahByID($id);
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('noTelp', 'NoTelp', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $data['title'] = 'Form Edit Data Nasabah';
            $data['nasabah'] = $this->Nasabah_model->getNasabahByID($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/update_nasabah', $data);
            $this->load->view('templates/footer');
        } else {
            # code...
            $this->Nasabah_model->ubahdatanasabah($id);
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('nasabah', 'refresh');
        }
    }
}


/* End of file Nasabah.php */
