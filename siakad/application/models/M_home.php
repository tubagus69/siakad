<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
public function get_siswahome(){
	return $this->db->query("SELECT * FROM tblsiswa join tblkelas on tblkelas.id_kelas=tblsiswa.id_kelas order by tblsiswa.id_kelas;");
}
}
?>