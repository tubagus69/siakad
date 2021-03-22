<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kalender extends CI_Model {
public function get_kalender()
	{
		return $this->db->query("SELECT * from tblkalender order by tgl_mulai");
	}
}
?>