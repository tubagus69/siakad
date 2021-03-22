<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mapel extends CI_Model {

public function get_idmapel($mapel)
	{
		return $this->db->query("SELECT kode_mapel as kode from tblmapel where nama_mapel='$mapel'");
	}
public function get_mapel()
	{
		return $this->db->query("SELECT * FROM tblmapel join tblkurikulum on tblmapel.id_kurikulum=tblkurikulum.id_kurikulum");
	}
public function get_lastkode()
	{
		return $this->db->query("SELECT max(kode_mapel) as kode from tblmapel");
	}
}
?>