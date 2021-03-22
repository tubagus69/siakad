<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Setor_model extends CI_Model
{

    public function getAllSetor()
    {
        //query digunakan untuk menampung isi dari tabel nasabah
        $query = $this->db->get('setor');
        //untuk menampilkan isi dari query
        return $query->result_array();
    }
    public function tambahDataSetoran()
    {
        $data = [
            "Nama" => $this->input->post('nama', true),
            "Jenis_sampah" => $this->input->post('jenis_sampah', true),
            "Kategori" => $this->input->post('kategori', true),
            "Harga_per_kg" => $this->input->post('harga_per_kg', true),
            "Jmlh_kg" => $this->input->post('jmlh_kg', true),
            "Total_harga" => $this->input->post('total_harga', true),
            "Tgl_setor" => $this->input->post('tgl_setor', true)
        ];
        $this->db->insert('Setor', $data);
    }
    public function hapusdatasetor($id)
    {
        $this->db->where('id_setor', $id);
        $this->db->delete('setor');
    }
    public function getSetorByID($id)
    {
        return $this->db->get_where('setor', array('id_setor' => $id))->row_array();
    }
    public function ubahdatasetor($id)
    {
        $data = [
            "Nama" => $this->input->post('nama', true),
            "Jenis_sampah" => $this->input->post('jenis_sampah', true),
            "Kategori" => $this->input->post('kategori', true),
            "Harga_per_kg" => $this->input->post('harga_per_kg', true),
            "Jmlh_kg" => $this->input->post('jmlh_kg', true),
            "Total_harga" => $this->input->post('total_harga', true),
            "Tgl_setor" => $this->input->post('tgl_setor', true)
        ];
        $this->db->where('id_setor', $id);
        $this->db->update('setor', $data);
    }

    public function databels()
    {
        $query = $this->db->order_by('id_setor', 'DESC')->get('setor');
        return $query->result();
    }
}
