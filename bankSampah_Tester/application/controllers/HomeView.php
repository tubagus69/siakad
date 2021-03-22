<?php


defined('BASEPATH') or exit('No direct script access allowed');

class HomeView extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Bank Sampah Tumpang';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index_dashboard', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file homeview.php */
