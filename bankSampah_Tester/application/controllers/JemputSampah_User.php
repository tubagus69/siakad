<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JemputSampah_User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        // $this->load->database();
        $this->load->model('User_JemputSampah_model');
    }

    public function index()
    {

        $this->load->model('User_JemputSampah_model');
        // modul untuk database

        $data['title'] = 'Form Jemput Sampah';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('noTelp', 'NoTelp', 'required');
        $this->form_validation->set_rules('permintaan', 'Permintaan', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('user/user_jemputSampah', $data);
            $this->load->view('templates/footer');
        } else {
            #code...
            $this->User_JemputSampah_model->tambahDataJemputSampah();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('JemputSampah_User', 'refresh');
        }
        //var_dump($data['JemputSampah']);

    }
}


/* End of file JemputSampah.php */
