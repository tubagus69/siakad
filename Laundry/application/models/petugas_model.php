<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Petugas_model extends CI_Model {

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
	function tampil_penggunaan()
	{
		$query = "SELECT * from penggunaan";
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
	function data_bulan()
	{
		$query = "SELECT * from bulan";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function data_bulan_by_id($id)
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
	function cek_penggunaan($idpelanggan,$bulan,$tahun)
	{
		$query = "SELECT * from penggunaan where IDPELANGGAN='$idpelanggan' and BULAN='$bulan' and TAHUN='$tahun'";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->row();
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
	function tampil_tagihan_by_id()
	{
		// $id = $this->session->userdata("IDUSER");
		// echo $id;exit();
		$query = "SELECT * from tagihan ";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->result();
			return $data; 
		}else{
			return false;
		}
	}
	function data_pelanggan($id)
	{
		// $id = $this->session->userdata("IDUSER");

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
	function data_tagihan($id)
	{
		// $id = $this->session->userdata("IDUSER");

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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */