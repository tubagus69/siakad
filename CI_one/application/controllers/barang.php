<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mbarang');
        $this->load->helper('form','url');
    }

    // awal tampil index
    public function index() {
        $data['title'] = 'Tabel Barang';
        $data['qbarang'] = $this->mbarang->get_allbarang();
        $this->load->view('vbarang', $data);
    }
    
    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        // ambil variabel dari form
        $id = addslashes($this->input->post('id'));
        $kode = addslashes($this->input->post('kode'));
        $nama = addslashes($this->input->post('nama'));
        $jenis = addslashes($this->input->post('jenis'));
        $keterangan = addslashes($this->input->post('uraian'));
        $satuan = addslashes($this->input->post('satuan'));
        $harga = addslashes($this->input->post('harga'));
        $stok = addslashes($this->input->post('stok'));

        // mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {
            $data['title'] = 'Tambah Barang';
            $data['aksi'] = 'aksi_add';
            $this->load->view('vformbarang', $data);
        } 
        elseif ($mau_ke == "edit") {
            $data['qdata'] = $this->mbarang->get_barang_byid($idu);
            $data['title'] = 'Edit Barang';
            $data['aksi']  = 'aksi_edit';
            $this->load->view('vformbarang', $data);
        } 
        elseif ($mau_ke == "aksi_add") {
            // jika uri segmentasinya AKSI_ADD sebagai fungsi untuk insert data
            $data = array(
                'barcode'    => $kode,
                'nama_brg'   => $nama,
                'harga_brg'  => $harga,
                'keterangan' => $keterangan,
                'satuan'     => $satuan,
                'jenis'      => $jenis,
                'stok_brg'   => $stok
            );

            $this->mbarang->get_insert($data);
            $this->session->set_flashdata("Pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di Simpan</div>");
            redirect('barang');
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'barcode'    => $kode,
                'nama_brg'   => $nama,
                'harga_brg'  => $harga,
                'keterangan' => $keterangan,
                'satuan'     => $satuan,
                'jenis'      => $jenis,
                'stok_brg'   => $stok
            );

            $this->mbarang->get_update($id, $data);
            $this->session->set_flashdata("Pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di Update</div>");
            redirect('barang/tampil');
        }
    }

    // fungsi detail barang
    public function detail($id) {
        $data['title'] = 'Detail Barang';
        $data['qbarang'] = $this->mbarang->get_barang_byid($id);

        $this->load->view('vdetbarang', $data);
    }

    // fungsi hapus barang
    public function hapus($gid) {
        $this->mbarang->del_barang($gid);
        $this->session->set_flashdata("Pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di Hapus</div>");
        redirect('barang/tampil');
    }

}
