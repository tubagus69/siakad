<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function getAllUser()
    {
        //query digunakan untuk menampung isi dari tabel user
        $query = $this->db->get('user');
        //untuk menampilkan isi dari query
        return $query->result_array();
    }

    public function hapusdatauser($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }
    public function getUserByID($id)
    {
        return $this->db->get_where('user', array('id_user' => $id))->row_array();
    }

    public function databels()
    {
        $query = $this->db->order_by('id_setor', 'DESC')->get('user');
        return $query->result();
    }
}
