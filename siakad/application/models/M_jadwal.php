<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {
public function jadwal_kelas($id_kelas)
	{
		return $this->db->query("SELECT * from tbljadwal where id_kelas='$id_kelas' order by hari ASC");
	}
}
?>