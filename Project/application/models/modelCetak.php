<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class modelCetak extends CI_Model {
  
    public function view(){
      $this->db->select('nama,email,jurusan');
      return $this->db->get('mahasiswa')->result();
    }

    public function cetakSiswa(){
      $this->db->select('nama,alamat,nim');
      return $this->db->get('siswa')->result();
    }
    public function Skill(){
      $this->db->select('nama,speed,drible,power');
      return $this->db->get('pemain')->result();
    }
  }
  /* End of file modelCetak.php */
  
?>