<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

public function get_siswakelas($id_kelas)
	{
		return $this->db->query("SELECT * from tblsiswa where id_kelas='$id_kelas' order by nama_siswa ASC");
	}
public function get_nilai($id_nilai)
	{
		return $this->db->query("SELECT * from tblnilai where id_nilai='$id_nilai' order by nis ASC");
	}
public function get_jumlah_siswa($id_kelas)
	{
		return $this->db->query("SELECT count(*) as jumlah from tblsiswa where id_kelas='$id_kelas'");
	}
}
?>