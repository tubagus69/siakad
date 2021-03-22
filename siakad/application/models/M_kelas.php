<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {
public function get_data_kelas()
	{
		return $this->db->query("SELECT * from tblkelas join tblguru on wali_kelas=tblguru.id_guru order by nama_kelas ASC");
	}
}
?>