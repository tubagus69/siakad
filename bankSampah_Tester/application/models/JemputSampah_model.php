<?php

defined('BASEPATH') or exit('No direct script access allowed');

class JemputSampah_model extends CI_Model
{

    public function getAllJemputSampah()
    {
        //query digunakan untuk menampung isi dari tabel nasabah
        $query = $this->db->get('jemputsampah');
        //untuk menampilkan isi dari query
        return $query->result_array();
    }
    public function tambahDataJemputSampah()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "noTelp" => $this->input->post('noTelp', true),
            "permintaan" => $this->input->post('permintaan', true)
        ];
        $this->db->insert('jemputSampah', $data);
    }
    public function hapusdatajemputsampah($id)
    {
        $this->db->where('id_jemput', $id);
        $this->db->delete('jemputSampah');
    }
    public function getJemputSampahByID($id)
    {
        return $this->db->get_where('jemputSampah', array('id_jemput' => $id))->row_array();
    }
    public function ubahdatajemputsampah($id)
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "noTelp" => $this->input->post('noTelp', true),
            "permintaan" => $this->input->post('permintaan', true)
        ];
        $this->db->where('id_jemput', $id);
        $this->db->update('jemputSampah', $data);
    }

    public function databels()
    {
        $query = $this->db->order_by('id_jemput', 'DESC')->get('jemputSampah');
        return $query->result();
    }
}
