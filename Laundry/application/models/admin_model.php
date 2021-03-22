<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function tampil_pelanggan()
	{
		$query = "SELECT * from pelanggan";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function data_tarif()
	{
		$query = "SELECT * from tarif";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function tampil_pelanggan_by_id($id)
	{
		$query = "SELECT * from pelanggan where IDPELANGGAN='$id'";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data; 
		}else{
			return false;
		}
	}
	function tampil_tarif()
	{
		$query = "SELECT * from tarif";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function tampil_tarif_by_id($id)
	{
		$query = "SELECT * from tarif where KODETARIF='$id'";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data; 
		}else{
			return false;
		}
	}
	function tampil_laporan()
	{
		$query = "SELECT * from view_laporan";
		// echo $query;exit();
		$this->session->set_flashdata('laporan',$query); 
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function tampil_laporan_alltahun($bulan)
	{
		$query = "SELECT * from view_laporan where BULAN='$bulan'";
		// echo $query;exit();
		$this->session->set_flashdata('laporan',$query);
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function tampil_laporan_allbulan($tahun)
	{
		$query = "SELECT * from view_laporan where TAHUN='$tahun'";
		// echo $query;exit();
		$this->session->set_flashdata('laporan',$query);
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function tampil_laporan_by_tahun_bulan($bulan,$tahun)
	{
		$query = "SELECT * from view_laporan where TAHUN='$tahun' and BULAN='$bulan'";
		// echo $query;exit();
		$this->session->set_flashdata('laporan',$query);
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function cetak_laporan()
	{
		$query = $this->session->flashdata('laporan');
		 // echo $query;exit();
		// $this->session->set_flashdata('laporan',$query);
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function tampil_petugas()
	{

		$id = $this->session->userdata("IDUSER");
		$query = "SELECT * from user where IDUSER != '$id' ";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function tampil_user_by_id($id)
	{

		// $id = $this->session->userdata("IDUSER");
		$query = "SELECT * from user where IDUSER = '$id' ";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data; 
		}else{
			return false;
		}
	}
	function tampil_bulan()
	{

		// $id = $this->session->userdata("IDUSER");
		$query = "SELECT * from bulan ";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function tampil_bulan_by_id($id)
	{

		// $id = $this->session->userdata("IDUSER");
		$query = "SELECT * from bulan where ID ='$id'";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data; 
		}else{
			return false;
		}
	}
	function coba_coba()
	{

		// $id = $this->session->userdata("IDUSER");
		$query = "SELECT max(KODETARIF) as aa from tarif ";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data; 
		}else{
			return false;
		}
	}
	function tampil_data_laporan($a,$b)
	{

		// $id = $this->session->userdata("IDUSER");
		$query = "SELECT * from view_laporan where bulan='$a' and tahun='$b' ";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function data_profile()
	{

		$id = $this->session->userdata("IDUSER");
		$query = "SELECT * from user where IDUSER ='$id'";
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