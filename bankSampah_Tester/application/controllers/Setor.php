<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        // $this->load->database();
        $this->load->model('Setor_model');
    }

    public function index()
    {

        $this->load->model('Setor_model');
        // modul untuk database

        $data['title'] = 'Bank Sampah Tumpang';
        $data['setor'] = $this->Setor_model->getAllSetor();
        if ($this->input->post('keyword')) {
            $data['setor'] = $this->Setor_model->cariDataSetoran();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index_setor', $data);
        $this->load->view('templates/footer');
        //var_dump($data['setor']);

    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Setoran';
        $data['setor'] = $this->Setor_model->getAllSetor();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_sampah', 'Jenis_sampah', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('harga_per_kg', 'Harga_per_kg', 'required');
        $this->form_validation->set_rules('jmlh_kg', 'Jmlh_kg', 'required');
        $this->form_validation->set_rules('total_harga', 'Total_harga', 'required');
        $this->form_validation->set_rules('tgl_setor', 'Tgl_setor', 'required');
        $data['jenis_sampah'] = ['Botol', 'Kertas', 'Tembaga', 'Besi', 'Plastik', 'Kaleng', 'Elektronik', 'Aluminium', 'Campur'];

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/add_setor', $data);
            $this->load->view('templates/footer');
        } else {
            #code...
            $this->Setor_model->tambahdatasetoran();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('setor', 'refresh');
        }
    }
    public function hapus($id)
    {
        $this->Setor_model->hapusdatasetor($id);
        //untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('setor', 'refersh');
    }
    public function detail($id)
    {

        $data['title'] = 'Detail Setoran';
        $data['setor'] = $this->Setor_model->getSetorByID($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail_setor', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {
        $data['title'] = 'Form Edit Data setor';
        $data['setor'] = $this->Setor_model->getSetorByID($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_sampah', 'Jenis_sampah', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('harga_per_kg', 'Harga_per_kg', 'required');
        $this->form_validation->set_rules('jmlh_kg', 'Jmlh_kg', 'required');
        $this->form_validation->set_rules('total_harga', 'Total_harga', 'required');
        $this->form_validation->set_rules('tgl_setor', 'Tgl_setor', 'required');
        $data['jenis_sampah'] = ['Botol', 'Kertas', 'Tembaga', 'Besi', 'Plastik', 'Kaleng', 'Elektronik', 'Aluminium', 'Campur'];
        if ($this->form_validation->run() == FALSE) {
            # code...
            $data['title'] = 'Form Edit Data setor';
            $data['setor'] = $this->Setor_model->getSetorByID($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/update_setor', $data);
            $this->load->view('templates/footer');
        } else {
            # code...
            $this->Setor_model->ubahdatasetor($id);
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('setor', 'refresh');
        }
    }
}


/* End of file setor.php */
