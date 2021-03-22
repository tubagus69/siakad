<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Nasabah_model extends CI_Model
{

    public function getAllNasabah()
    {
        //query digunakan untuk menampung isi dari tabel nasabah
        $query = $this->db->get('nasabah');
        //untuk menampilkan isi dari query
        return $query->result_array();
    }
    public function tambahDataNasabah()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "address" => $this->input->post('address', true),
            "noTelp" => $this->input->post('noTelp', true),
        ];
        $this->db->insert('nasabah', $data);
    }
    public function hapusdatanasabah($id)
    {
        $this->db->where('id_nasabah', $id);
        $this->db->delete('nasabah');
    }
    public function getNasabahByID($id)
    {
        return $this->db->get_where('nasabah', array('id_nasabah' => $id))->row_array();
    }
    public function ubahdatanasabah($id)
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "address" => $this->input->post('address', true),
            "noTelp" => $this->input->post('noTelp', true),
        ];
        $this->db->where('id_nasabah', $id);
        $this->db->update('nasabah', $data);
    }

    public function databels()
    {
        $query = $this->db->order_by('id_nasabah', 'DESC')->get('nasabah');
        return $query->result();
    }
}
