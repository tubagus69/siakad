<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class UserClient extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/TugasBesarWeb/User";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    //Menampilkan Data Barang
    public function index()
    {
        $data['login'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Data User";
        $this->load->view('Admin/template/header_admin',$data);
        $this->load->view('Admin/template/sidebar_admin');
        $this->load->view('Admin/user/index', $data);
        $this->load->view('Admin/template/footer_admin');
    }

     //Menghapus Data
     public function delete()
     {
         $params = array('id_login' =>  $this->uri->segment(3));
         $delete =  $this->curl->simple_delete($this->API, $params);
         if ($delete) {
             $this->session->set_flashdata('result', 'Hapus Data User Berhasil');
         } else {
             $this->session->set_flashdata('result', 'Hapus Data User Gagal');
         }
         redirect('UserClient');
     }

      //menambah data
    public function post()
    {
        $data['title'] = "Tambah Data User";
        $this->load->view('Admin/template/header_admin',$data);
        $this->load->view('Admin/template/sidebar_admin');
        $this->load->view('Admin/user/post', $data, FALSE);
        $this->load->view('Admin/template/footer_admin');
    }

    //Proses Menambahkan data
    public function post_process()
    {
        $data = array(
            'nama'          => $this->input->post('nama'),
            'username'          => $this->input->post('username'),
            'password'          => $this->input->post('password'),
            'level'          => $this->input->post('level'),
            'status'          => $this->input->post('status'),
        );
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data User Berhasil Ditambahkan');
            redirect('UserClient');
        } else {
            $this->session->set_flashdata('result', 'Data User Gagal Ditambahkan');
        }
    }

     //Mengedit Data User
     public function put()
     {
         $params = array('id_login' =>  $this->uri->segment(3));
         $data['login'] = json_decode($this->curl->simple_get($this->API, $params));
         $data['title'] = "Edit Data User";
         $this->load->view('Admin/template/header_admin',$data);
         $this->load->view('Admin/template/sidebar_admin');
         $this->load->view('Admin/user/put', $data, FALSE);
         $this->load->view('Admin/template/footer_admin');
      }
 
    
     public function put_process()
     {
         $data = array(
            'id_login'          => $this->input->post('id_login'),
            'nama'          => $this->input->post('nama'),
            'username'          => $this->input->post('username'),
            'password'          => $this->input->post('password'),
            'level'          => $this->input->post('level'),
            'status'          => $this->input->post('status'),
            
         );
         $update =  $this->curl->simple_put($this->API.'/User', $data, array(CURLOPT_BUFFERSIZE => 10)); 
         if($update)
         {
             $this->session->set_flashdata('hasil','Update Data Berhasil');
             redirect('UserClient/');
         }else
         {
            $this->session->set_flashdata('hasil','Update Data Gagal');
         } 
     }

     public function detail($id_login){
        $params = array('id_login' =>  $this->uri->segment(3));
        $data['login'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title']='Detail User';
        $this->load->view('admin/template/header_login', $data);
        $this->load->view('Admin/User/detail', $data);
    }
}   
