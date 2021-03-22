<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_Nabung_model extends CI_Model
{

    public function tambahDataNabungUser()
    {
        $data = [
            "nama_petugas" => $this->input->post('nama_petugas', true),
            "nama_nasabah" => $this->input->post('nama_nasabah', true),
            "tgl_transaksi" => $this->input->post('tgl_transaksi', true),
            "jenis_sampah" => $this->input->post('jenis_sampah', true),
            "kategori_sampah" => $this->input->post('kategori_sampah', true),
            "jumlah_kg" => $this->input->post('jumlah_kg', true),
        ];
        $this->db->insert('nabung', $data);
    }

    public function databels()
    {
        $query = $this->db->order_by('id_nabung', 'DESC')->get('nabung');
        return $query->result();
    }
}
