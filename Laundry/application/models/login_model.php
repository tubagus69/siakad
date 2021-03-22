<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	function cek_login($user,$pass)
	{
		$query = "SELECT * from user where username='$user' and PASSWORD='$pass'";
		// echo $query;exit();
		$query = $this->db->query($query);

		if ($query->num_rows() > 0) {
			$data = $query->row();
			return $data; 
		}else{
			 $query1 = "SELECT * from pelanggan where USERNAME='$user' and PASSWORD='$pass'";
			  echo $query1;exit();
			 $query2 = $this->db->query($query1);
			 if ($query2->num_rows() > 0) {
			 	$data1 = $query2->row();
			 	return $data1;
			 }else{
			 	return false;
			 }

		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */