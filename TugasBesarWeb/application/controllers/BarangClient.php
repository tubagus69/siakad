<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class BarangClient extends CI_Controller {

    public function __construct()
    {
      
        //$this->load->model('BarangClient_model');
        //$this->load->model('KategoriClient_model');
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/TugasBesarWeb/Barang";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    //Menampilkan Data Barang
    public function index()
    {
        $data['barang'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Barang";
        $this->load->view('Admin/template/header_admin',$data);
        $this->load->view('Admin/template/sidebar_admin');
        $this->load->view('Admin/Barang/index', $data);
        $this->load->view('Admin/template/footer_admin');
    }

     //menambah data
     public function post()
     {
         $data['title'] = "Tambah Data Barang";
         $data['dataKategori'] = json_decode($this->curl->simple_get("http://localhost/TugasBesarWeb/Kategori"));
         $this->load->view('Admin/template/header_admin',$data);
         $this->load->view('Admin/template/sidebar_admin');
         $this->load->view('Admin/barang/post', $data, FALSE);
         $this->load->view('Admin/template/footer_admin');
     }
 
     //Proses Menambahkan data
     public function post_process()
     {
         $data = array(
            'id_kategori'          => $this->input->post('kategori'),
            'nama_barang'          => $this->input->post('nama_barang'),
            'stok'                 => $this->input->post('stok'),
            'harga'                => $this->input->post('harga'),
         );
         $insert =  $this->curl->simple_post($this->API, $data);
         if ($insert) {
             $this->session->set_flashdata('result', 'Data Barang Berhasil Ditambahkan');
             redirect('BarangClient');
         } else {
             $this->session->set_flashdata('result', 'Data Barang Gagal Ditambahkan');
         }
     }

     
    //Menghapus Data
    public function delete()
    {
        $params = array('id_barang' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Barang Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Barang Gagal');
        }
        redirect('BarangClient');
    }

    //Mengedit Data Barang
    public function put()
    {
        $params = array('id_barang' =>  $this->uri->segment(3));
        $data['dataKategori'] = json_decode($this->curl->simple_get("http://localhost/TugasBesarWeb/Kategori"));
        $data['barang'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data Barang";
        $this->load->view('Admin/template/header_admin',$data);
        $this->load->view('Admin/template/sidebar_admin');
        $this->load->view('Admin/barang/put', $data, FALSE);
        $this->load->view('Admin/template/footer_admin');
     }

     //Proses Edit Kategori
    public function put_process()
    {
        $params = array('id_barang' =>  $this->uri->segment(3));
      
        $data = array(
            'id_barang'            => $this->input->post('id_barang'),
            'id_kategori'          => $this->input->post('kategori'),
            'nama_barang'          => $this->input->post('nama_barang'),
            'stok'                 => $this->input->post('stok'),
            'harga'                => $this->input->post('harga'),
           
        );
        $update =  $this->curl->simple_put($this->API.'/Barang', $data, array(CURLOPT_BUFFERSIZE => 10)); 
        if($update)
        {
            $this->session->set_flashdata('hasil','Update Data Berhasil');
        }else
        {
           $this->session->set_flashdata('hasil','Update Data Gagal');
        }
        redirect('BarangClient/');
    }

    public function detail($id_barang){
        $params = array('id_barang' =>  $this->uri->segment(3));
        $data['barang'] = json_decode($this->curl->simple_get($this->API, $params));
        
        $data['title']='Detail Kategori';
        $this->load->view('admin/template/header_login', $data);
        $this->load->view('Admin/barang/detail', $data);
    }
    

}

/* End of file kategori.php */
