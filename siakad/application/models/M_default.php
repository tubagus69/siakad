<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_default extends CI_Model {
public function input_data($data,$table){
	$this->db->insert($table,$data);
			if($this->db->affected_rows()>0){
				return TRUE;
			}else{
				return FALSE;
			}
	}
public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
public function get_data_detail($where,$table){		
		return $this->db->get_where($table,$where);
	}
public function get_data($table){
		return $this->db->get($table);
	}	
public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
public function update_all($data,$table)
	{
		$this->db->update($table,$data);
	}
public function get_lastid($table)
	{
		return $this->db->query("SELECT max(id_".$table.") as id from tbl$table");
	}
}
?>