<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_JemputSampah_model extends CI_Model
{

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

    public function databels()
    {
        $query = $this->db->order_by('id_jemput', 'DESC')->get('jemputSampah');
        return $query->result();
    }
}
