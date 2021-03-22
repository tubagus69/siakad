<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Nabung_model extends CI_Model
{

    public function getAllNabung()
    {
        //query digunakan untuk menampung isi dari tabel nabung
        $query = $this->db->get('nabung');
        //untuk menampilkan isi dari query
        return $query->result_array();
    }
    public function tambahDataTabungan()
    {
        $data = [
            "Nama_Petugas" => $this->input->post('nama_petugas', true),
            "Nama_Nasabah" => $this->input->post('nama_nasabah', true),
            "Tgl_transaksi" => $this->input->post('tgl_transaksi', true),
            "Jenis_sampah" => $this->input->post('jenis_sampah', true),
            "Kategori_sampah" => $this->input->post('kategori_sampah', true),
            "Jumlah_Kg" => $this->input->post('jumlah_kg', true)
        ];
        $this->db->insert('nabung', $data);
    }
    public function hapusdatatabungan($id)
    {
        $this->db->where('id_nabung', $id);
        $this->db->delete('nabung');
    }
    public function getNabungByID($id)
    {
        return $this->db->get_where('nabung', array('id_nabung' => $id))->row_array();
    }
    public function ubahdatatabungan($id)
    {
        $data = [
            "Nama_Petugas" => $this->input->post('nama_petugas', true),
            "Nama_Nasabah" => $this->input->post('nama_nasabah', true),
            "Tgl_transaksi" => $this->input->post('tgl_transaksi', true),
            "Jenis_sampah" => $this->input->post('jenis_sampah', true),
            "Kategori_sampah" => $this->input->post('kategori_sampah', true),
            "Jumlah_kg" => $this->input->post('jumlah_kg', true)
        ];
        $this->db->where('id_nabung', $id);
        $this->db->update('nabung', $data);
    }

    public function databels()
    {
        $query = $this->db->order_by('id_nabung', 'DESC')->get('nabung');
        return $query->result();
    }
}
