<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class cetaksiswa_model extends CI_Model {

    public function view()
    {
        $this->db->select('nama,alamat,nim');
        $query=$this->db->get('siswa');
        return $query->result();
    }

}

/* End of file cetak_model.php */
?>