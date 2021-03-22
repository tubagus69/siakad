<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nabung extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        // $this->load->database();
        $this->load->model('Nabung_model');
    }

    public function index()
    {

        $this->load->model('Nabung_model');
        // modul untuk database

        $data['title'] = 'Bank Sampah Tumpang';
        $data['nabung'] = $this->Nabung_model->getAllNabung();
        if ($this->input->post('keyword')) {
            $data['nabung'] = $this->Nabung_model->cariDataTabungan();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index_nabung', $data);
        $this->load->view('templates/footer');
        //var_dump($data['nabung']);

    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Tabungan';
        $data['nabung'] = $this->Nabung_model->getAllNabung();
        $this->form_validation->set_rules('nama_petugas', 'Nama_Petugas', 'required');
        $this->form_validation->set_rules('nama_nasabah', 'Nama_Nasabah', 'required');
        $this->form_validation->set_rules('tgl_transaksi', 'Tgl_transaksi', 'required');
        $this->form_validation->set_rules('jenis_sampah', 'Email', 'required');
        $this->form_validation->set_rules('kategori_sampah', 'Address', 'required');
        $this->form_validation->set_rules('jumlah_kg', 'Jumlah_kg', 'required');
        $data['jenis_sampah'] = ['Botol', 'Kertas', 'Tembaga', 'Besi', 'Plastik', 'Kaleng', 'Elektronik', 'Aluminium', 'Campur'];

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/add_nabung', $data);
            $this->load->view('templates/footer');
        } else {
            #code...
            $this->Nabung_model->tambahdatatabungan();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('nabung', 'refresh');
        }
    }
    public function hapus($id)
    {
        $this->Nabung_model->hapusdatatabungan($id);
        //untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('nabung', 'refersh');
    }
    public function detail($id)
    {

        $data['title'] = 'Detail Tabungan';
        $data['nabung'] = $this->Nabung_model->getNabungByID($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail_nabung', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)
    {
        $data['title'] = 'Form Edit Tabungan';
        $data['nabung'] = $this->Nabung_model->getnabungByID($id);
        $this->form_validation->set_rules('nama_petugas', 'Nama_Petugas', 'required');
        $this->form_validation->set_rules('nama_nasabah', 'Nama_Nasabah', 'required');
        $this->form_validation->set_rules('tgl_transaksi', 'Tgl_transaksi', 'required');
        $this->form_validation->set_rules('jenis_sampah', 'Email', 'required');
        $this->form_validation->set_rules('kategori_sampah', 'Address', 'required');
        $this->form_validation->set_rules('jumlah_kg', 'Jumlah_kg', 'required');
        $data['jenis_sampah'] = ['Botol', 'Kertas', 'Tembaga', 'Besi', 'Plastik', 'Kaleng', 'Elektronik', 'Aluminium', 'Campur'];

        if ($this->form_validation->run() == FALSE) {
            # code...
            $data['title'] = 'Form Edit Tabungan';
            $data['nabung'] = $this->Nabung_model->getnabungByID($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/update_nabung', $data);
            $this->load->view('templates/footer');
        } else {
            # code...
            $this->Nabung_model->ubahdatatabungan($id);
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('nabung', 'refresh');
        }
    }
}


/* End of file nabung.php */
