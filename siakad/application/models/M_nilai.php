<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nilai extends CI_Model {
public function get_nilai_siswa($id_siswa,$kode_mapel)
	{
		return $this->db->query("SELECT * from tblnilai where id_siswa='$id_siswa' and kode_mapel='$kode_mapel' order by semester");
	}

}
?>