<?php
defined('BASEPATH') or exit('No direct script access allowed');
class TransaksiClient extends CI_Controller
{
    public function __construct()
    {
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
        $data['transaksi'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Transaksi";
        $this->load->view('Admin/template/header_admin',$data);
        $this->load->view('Admin/template/sidebar_admin');
        $this->load->view('Admin/Transaksi/index', $data);
        $this->load->view('Admin/template/footer_admin');
    }

     //menambah data
     public function post()
     {
         $data['title'] = "Tambah Data Transaksi";
         $data['dataBarang'] = json_decode($this->curl->simple_get("http://localhost/TugasBesarWeb/Barang"));
         $this->load->view('Admin/template/header_admin',$data);
         $this->load->view('Admin/template/sidebar_admin');
         $this->load->view('Admin/transaksi/post', $data, FALSE);
         $this->load->view('Admin/template/footer_admin');
     }
 
     //Proses Menambahkan data
     public function post_process()
     {
         $data = array(
            'id_barang'          => $this->input->post('barang'),
            'jumlah'          => $this->input->post('jumlah'),
            'harga'          => $this->input->post('harga'),
            'harga_total'          => $this->input->post('harga_total'),
            'bayar'                => $this->input->post('bayar'),
            'kembalian'          => $this->input->post('kembalian'),
            'tanggal'          => $this->input->post('tanggal'),
         );
         $insert =  $this->curl->simple_post($this->API, $data);
         if ($insert) {
             $this->session->set_flashdata('result', 'Data Transaksi Berhasil Ditambahkan');
             redirect('TransaksiClient');
         } else {
             $this->session->set_flashdata('result', 'Data Transaksi Gagal Ditambahkan');
         }
     }

      //Menghapus Data
    public function delete()
    {
        $params = array('id_transaksi' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Transaksi Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Transaksi Gagal');
        }
        redirect('TransaksiClient');
    }

    public function detail($id_transaksi){
        // $params = array('id_transaksi' =>  $this->uri->segment(3));
        $url = $this->API."?id_transaksi=".$id_transaksi;
        // echo $url;die();
        $data['transaksi'] = json_decode($this->curl->simple_get($url));
        $data['title']='Detail Transaksi';
        $this->load->view('admin/template/header_login', $data);
        $this->load->view('Admin/transaksi/detail', $data);
    }

  

}    