<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class transaksiUser extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/TugasBesarWeb/Transaksi";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    public function index()
    {
        $data['title'] = 'Halaman Transaksi User';
        $data['transaksi'] = json_decode($this->curl->simple_get($this->API));
        $this->load->view('User/transaksi/index', $data);
        $this->load->view('user/template/header_datatables_user');
        $this->load->view('user/template/footer_datatables_user');
   
    }

     //menambah data
     public function post()
     {
         $data['title'] = "Tambah Data Transaksi";
         $data['dataBarang'] = json_decode($this->curl->simple_get("http://localhost/TugasBesarWeb/Barang"));
         
         $this->load->view('User/transaksi/post', $data);
         $this->load->view('User/transaksi/index1', $data);
         
     }
 
     //Proses Menambahkan data
     public function post_process()
     {
         $data = array(
            'id_barang'          => $this->input->post('barang'),
            'jumlah'          => $this->input->post('jumlah'),
            'harga'          => $this->input->post('harga'),
            'harga_total'          => $this->input->post('harga_total'),
            'bayar'          => $this->input->post('bayar'),
            'kembalian'          => $this->input->post('kembalian'),
            'tanggal'          => $this->input->post('tanggal'),

         );
         $insert =  $this->curl->simple_post($this->API, $data);
         if ($insert) {
             $this->session->set_flashdata('result', 'Data Transaksi Berhasil Ditambahkan');
             redirect('transaksiUser');
         } else {
             $this->session->set_flashdata('result', 'Data Transaksi Gagal Ditambahkan');
         }
     }

}