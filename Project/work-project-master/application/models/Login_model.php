<?php
  
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class login_model extends CI_Model {
 
   
    function login($username,$password){
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('username',$username);
      $this->db->where('password',$password);
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 0) {
          return FALSE;
      } else {
          return $query->result();
      }
    }
}
 /* End of file ModelName.php */
 
?>