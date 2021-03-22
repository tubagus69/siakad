<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengguna_model extends CI_Model {

	function tampil_tagihan_by_id()
	{
		$id = $this->session->userdata("IDUSER");
		// echo $id;exit();
		$query = "SELECT * from tagihan where IDPELANGGAN='$id'";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function tampil_laporan()
	{
		$id = $this->session->userdata("IDUSER");

		$query = "SELECT * from view_laporan where IDPELANGGAN = '$id'";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function data_pelanggan()
	{
		$id = $this->session->userdata("IDUSER");

		$query = "SELECT * from view_pelanggan where IDPELANGGAN = '$id'";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data; 
		}else{
			return false;
		}
	}
	function data_pelangganbyid()
	{
		$id = $this->session->userdata("IDUSER");

		$query = "SELECT * from pelanggan where IDPELANGGAN = '$id'";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data; 
		}else{
			return false;
		}
	}
	function data_tagihan()
	{
		$id = $this->session->userdata("IDUSER");

		$query = "SELECT * from view_laporan where IDPELANGGAN = '$id'";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data; 
		}else{
			return false;
		}
	}
	function data_biaya_admin()
	{
		$id = $this->session->userdata("IDUSER");

		$query = "SELECT * from biaya_admin";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data; 
		}else{
			return false;
		}
	}
	function data_bUlan_by_id($id)
	{
		$query = "SELECT * from bulan where ID='$id'";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data; 
		}else{
			return false;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */