<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
        // $this->load->database();
        $this->load->model('User_model');
    }

    public function index()
    {

        $this->load->model('User_model');
        // modul untuk database

        $data['title'] = 'Bank Sampah Tumpang';
        $data['user'] = $this->User_model->getAllUser();
        if ($this->input->post('keyword')) {
            $data['user'] = $this->User_model->cariDataUser();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index_user', $data);
        $this->load->view('templates/footer');
        //var_dump($data['user']);

    }

    public function hapus($id)
    {
        $this->User_model->hapusdatauser($id);
        //untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('user', 'refersh');
    }
    public function detail($id)
    {

        $data['title'] = 'Detail User';
        $data['user'] = $this->User_model->getUserByID($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail_user', $data);
        $this->load->view('templates/footer');
    }
}


/* End of file user.php */
