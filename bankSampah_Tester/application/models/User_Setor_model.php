<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_Setor_model extends CI_Model
{

    public function tambahDataSetorUser()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "jenis_sampah" => $this->input->post('jenis_sampah', true),
            "kategori" => $this->input->post('kategori', true),
            "harga_per_kg" => $this->input->post('harga_per_kg', true),
            "jmlh_kg" => $this->input->post('jmlh_kg', true),
            "total_harga" => $this->input->post('total_harga', true),
            "tgl_setor" => $this->input->post('tgl_setor', true),
        ];
        $this->db->insert('setor', $data);
    }

    public function databels()
    {
        $query = $this->db->order_by('id_jemput', 'DESC')->get('setor');
        return $query->result();
    }
}
