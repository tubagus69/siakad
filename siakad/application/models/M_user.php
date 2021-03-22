<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function get_loginguru($table)
	{
		return $this->db
				->where('nip',$this->input->post('nip_nis'))
				->where('password',$this->input->post('password'))
				->get($table);
	}
	public function get_loginsiswa($table)
	{
		return $this->db
				->where('nis',$this->input->post('nip_nis'))
				->where('password',$this->input->post('password'))
				->get($table);
	}
	public function get_loginadmin($table)
	{
		return $this->db
				->where('nip',$this->input->post('nip'))
				->where('password',$this->input->post('password'))
				->get($table);
	}
}

/* End of file M_barang.php */
/* Location: ./application/models/M_barang.php */