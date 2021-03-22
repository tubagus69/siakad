<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jemputSampah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        // $this->load->database();
        $this->load->model('JemputSampah_model');
    }

    public function index()
    {

        $this->load->model('JemputSampah_model');
        // modul untuk database

        $data['title'] = 'Bank Sampah Tumpang';
        $data['jemputSampah'] = $this->JemputSampah_model->getAllJemputSampah();
        if ($this->input->post('keyword')) {
            $data['jemputSampah'] = $this->JemputSampah_model->cariDataJemputSampah();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index_jemputSampah', $data);
        $this->load->view('templates/footer');
        //var_dump($data['nasabah']);

    }

    public function tambah()
    {
        $data['title'] = 'Form Jemput Sampah';
        $data['jemputSampah'] = $this->JemputSampah_model->getAllJemputSampah();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('noTelp', 'NoTelp', 'required');
        $this->form_validation->set_rules('permintaan', 'Permintaan', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/add_jemputSampah', $data);
            $this->load->view('templates/footer');
        } else {
            #code...
            $this->JemputSampah_model->tambahDataJemputSampah();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('jemputSampah', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->JemputSampah_model->hapusdatajemputsampah($id);
        //untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('jemputSampah', 'refersh');
    }
    public function detail($id)
    {

        $data['title'] = 'Detail Jemput Sampah';
        $data['jemputSampah'] = $this->JemputSampah_model->getJemputSampahByID($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail_jemputSampah', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {
        $data['title'] = 'Form Edit Data Jemput Sampah';
        $data['jemputSampah'] = $this->JemputSampah_model->getJemputSampahByID($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('noTelp', 'NoTelp', 'required');
        $this->form_validation->set_rules('permintaan', 'Permintaan', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $data['title'] = 'Form Edit Jemput Sampah';
            $data['jemputSampah'] = $this->JemputSampah_model->getJemputSampahByID($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/update_jemputSampah', $data);
            $this->load->view('templates/footer');
        } else {
            # code...
            $this->JemputSampah_model->ubahdatajemputsampah($id);
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('jemputSampah', 'refresh');
        }
    }
}


/* End of file JemputSampah.php */
