<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Member extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mmember');
        $this->load->helper('form','url');
    }

    // awal tampil index
    public function index() {
        $data['title'] = 'Data Member';
        $data['qmember'] = $this->mmember->get_allmember();
        $this->load->view('vmember', $data);
    }
    
    public function tampil() {        
        $data['title'] = 'Data Memner';
        $data['qmember'] = $this->mmember->get_allmember();
        $this->load->view('vmember', $data);
    }


    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        // ambil variabel dari form
        $id = addslashes($this->input->post('id'));
        $member_no = addslashes($this->input->post('member_no'));
        $name = addslashes($this->input->post('name'));
        $fullname = addslashes($this->input->post('fullname'));
        $gender = addslashes($this->input->post('gender'));
        $address = addslashes($this->input->post('address'));
        $job = addslashes($this->input->post('job'));
        $m_status = addslashes($this->input->post('m_status'));
        $external = addslashes($this->input->post('external'));

        // mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {
            $data['title'] = 'Tambah Member';
            $data['aksi'] = 'aksi_add';
            $this->load->view('vformmember', $data);
        } 
        elseif ($mau_ke == "edit") {
            $data['qdata'] = $this->mmember->get_member_byid($idu);
            $data['title'] = 'Edit Member';
            $data['aksi']  = 'aksi_edit';
            $this->load->view('vformmember', $data);
        } 
        elseif ($mau_ke == "aksi_add") {
            // jika uri segmentasinya AKSI_ADD sebagai fungsi untuk insert data
            $data = array(
                'member_no'=> $member_no,
                'name'     => $name,
                'fullname' => $fullname,
                'gender'   => $gender,
                'address'  => $address,
                'job'      => $job,
                'm_status' => $m_status,
                'external' => $external
            );

            $this->mmember->get_insert($data);
            $this->session->set_flashdata("Pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di Simpan</div>");
            redirect('member');
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'member_no'=> $member_no,
                'name'     => $nama,
                'fullname' => $fullname,
                'gender'   => $gender,
                'address'  => $address,
                'job'      => $job,
                'm_status' => $m_status,
                'external' => $external
            );

            $this->mmember->get_update($id, $data);
            $this->session->set_flashdata("Pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di Update</div>");
            redirect('member');
        }
    }

    // fungsi detail barang
    public function detail($id) {
        $data['title'] = 'Detail Member';
        $data['qmember'] = $this->mmember->get_member_byid($id);

        $this->load->view('vdetmember', $data);
    }

    // fungsi hapus barang
    public function hapus($gid) {
        $this->mmember->del_member($gid);
        $this->session->set_flashdata("Pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di Hapus</div>");
        redirect('member');
    }

}
