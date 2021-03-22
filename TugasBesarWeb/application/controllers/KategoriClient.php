<?php
defined('BASEPATH') or exit('No direct script access allowed');
class KategoriClient extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/TugasBesarWeb/Kategori";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    //menampilkan data
    public function index()
    {
        $data['kategori'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Kategori";
        $this->load->view('Admin/template/header_admin',$data);
        $this->load->view('Admin/template/sidebar_admin');
        $this->load->view('Admin/kategori/index', $data);
        $this->load->view('Admin/template/footer_admin');
    }

    //menambah data
    public function post()
    {
        $data['title'] = "Tambah Data Kategori";
        $this->load->view('Admin/template/header_admin',$data);
        $this->load->view('Admin/template/sidebar_admin');
        $this->load->view('Admin/kategori/post', $data, FALSE);
        $this->load->view('Admin/template/footer_admin');
    }

    //Proses Menambahkan data
    public function post_process()
    {
        $data = array(
            'nama_kategori'          => $this->input->post('nama_kategori'),
          
        );
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data Kategori Berhasil Ditambahkan');
            redirect('KategoriClient');
        } else {
            $this->session->set_flashdata('result', 'Data Kategori Gagal Ditambahkan');
        }
    }

    //Menghapus Data
    public function delete()
    {
        $params = array('id_kategori' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Menu Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Menu Gagal');
        }
        redirect('KategoriClient');
    }
    
    //Mengedit Data Kategori
    public function put()
    {
        $params = array('id_kategori' =>  $this->uri->segment(3));
        $data['kategori'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data Kategori";
        $this->load->view('Admin/template/header_admin',$data);
        $this->load->view('Admin/template/sidebar_admin');
        $this->load->view('Admin/kategori/put', $data, FALSE);
        $this->load->view('Admin/template/footer_admin');
     }

     //Proses Edit Kategori
    public function put_process()
    {
        $data = array(
            'id_kategori'          => $this->input->post('id_kategori'),
            'nama_kategori'         => $this->input->post('nama_kategori'),
           
        );
        $update =  $this->curl->simple_put($this->API.'/Kategori', $data, array(CURLOPT_BUFFERSIZE => 10)); 
        if($update)
        {
            $this->session->set_flashdata('hasil','Update Data Berhasil');
        }else
        {
           $this->session->set_flashdata('hasil','Update Data Gagal');
        }
        redirect('KategoriClient/');
    }

    public function detail($id_kategori){
        $params = array('id_kategori' =>  $this->uri->segment(3));
        $data['kategori'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title']='Detail Kategori';
        $this->load->view('admin/template/header_login', $data);
        $this->load->view('Admin/Kategori/detail', $data);
    }
      
}    