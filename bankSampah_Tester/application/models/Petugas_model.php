<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Petugas_model extends CI_Model
{

    public function getAllPetugas()
    {
        //query digunakan untuk menampung isi dari tabel petugas
        $query = $this->db->get('petugas');
        //untuk menampilkan isi dari query
        return $query->result_array();
    }
    public function tambahDataPetugas()
    {
        $data = [
            "Nama" => $this->input->post('nama', true),
            "Email" => $this->input->post('email', true),
            "Tgl_lahir" => $this->input->post('tgl_lahir', true),
            "Agama" => $this->input->post('agama', true),
            "Alamat" => $this->input->post('alamat', true),
            "NoTelp" => $this->input->post('noTelp', true)
        ];
        $this->db->insert('petugas', $data);
    }
    public function hapusdatapetugas($id)
    {
        $this->db->where('id_petugas', $id);
        $this->db->delete('petugas');
    }
    public function getPetugasByID($id)
    {
        return $this->db->get_where('petugas', array('id_petugas' => $id))->row_array();
    }
    public function ubahdatapetugas($id)
    {
        $data = [
            "Nama" => $this->input->post('nama', true),
            "Email" => $this->input->post('email', true),
            "Tgl_lahir" => $this->input->post('tgl_lahir', true),
            "Agama" => $this->input->post('agama', true),
            "Alamat" => $this->input->post('alamat', true),
            "noTelp" => $this->input->post('noTelp', true)
        ];
        $this->db->where('id_petugas', $id);
        $this->db->update('petugas', $data);
    }

    public function databels()
    {
        $query = $this->db->order_by('id_petugas', 'DESC')->get('petugas');
        return $query->result();
    }
}
