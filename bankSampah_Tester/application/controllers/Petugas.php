<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        // $this->load->database();
        $this->load->model('Petugas_model');
    }

    public function index()
    {

        $this->load->model('Petugas_model');
        // modul untuk database

        $data['title'] = 'Bank Sampah Tumpang';
        $data['petugas'] = $this->Petugas_model->getAllPetugas();
        if ($this->input->post('keyword')) {
            $data['petugas'] = $this->Petugas_model->cariDataPetugas();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index_petugas', $data);
        $this->load->view('templates/footer');
        //var_dump($data['petugas']);

    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Tabungan';
        $data['petugas'] = $this->Petugas_model->getAllPetugas();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('noTelp', 'NoTelp', 'required');
        $data['agama'] = ['Islam', 'Protestan', 'Katholik', 'Hindu', 'Budha', 'Konghucu', 'lain-lain'];

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/add_petugas', $data);
            $this->load->view('templates/footer');
        } else {
            #code...
            $this->Petugas_model->tambahdatapetugas();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('petugas', 'refresh');
        }
    }
    public function hapus($id)
    {
        $this->Petugas_model->hapusdatapetugas($id);
        //untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('petugas', 'refersh');
    }
    public function detail($id)
    {

        $data['title'] = 'Detail Tabungan';
        $data['petugas'] = $this->Petugas_model->getPetugasByID($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail_petugas', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {
        $data['title'] = 'Form Edit Petugas';
        $data['petugas'] = $this->Petugas_model->getpetugasByID($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('noTelp', 'NoTelp', 'required');
        $data['agama'] = ['Islam', 'Protestan', 'Katholik', 'Hindu', 'Budha', 'Konghucu', 'lain-lain'];


        if ($this->form_validation->run() == FALSE) {
            # code...
            $data['title'] = 'Form Edit Petugas';
            $data['petugas'] = $this->Petugas_model->getpetugasByID($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/update_petugas', $data);
            $this->load->view('templates/footer');
        } else {
            # code...
            $this->Petugas_model->ubahdatapetugas($id);
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('petugas', 'refresh');
        }
    }
}


/* End of file petugas.php */
