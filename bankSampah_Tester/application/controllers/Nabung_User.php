<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nabung_User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        // $this->load->database();
        $this->load->model('User_Nabung_model');
    }

    public function index()
    {

        $this->load->model('User_Nabung_model');
        // modul untuk database

        $data['title'] = 'Form User Menabung Sampah';

        $this->form_validation->set_rules('nama_petugas', 'Nama_Petugas', 'required');
        $this->form_validation->set_rules('nama_nasabah', 'Nama_Nasabah', 'required');
        $this->form_validation->set_rules('tgl_transaksi', 'Tgl_Transaksi', 'required');
        $this->form_validation->set_rules('jenis_sampah', 'Jenis_Sampah', 'required');
        $this->form_validation->set_rules('kategori_sampah', 'Kategori_Sampah', 'required');
        $this->form_validation->set_rules('jumlah_kg', 'Jumlah_kg', 'required');
        $data['jenis_sampah'] = ['Botol', 'Kertas', 'Tembaga', 'Besi', 'Plastik', 'Kaleng', 'Elektronik', 'Aluminium', 'Campur'];

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('user/user_nabung', $data);
            $this->load->view('templates/footer');
        } else {
            #code...
            $this->User_Nabung_model->tambahDataNabungUser();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('Nabung_User', 'refresh');
        }
        //var_dump($data['Setor_User']);

    }
}


/* End of file JemputSampah.php */
