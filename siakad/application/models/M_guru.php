<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_default extends CI_Model {
public function search_guru($nama)
	{
		return $this->db->query("SELECT * from tblguru where nama_guru like '%$nama%'");
	}
}
?>