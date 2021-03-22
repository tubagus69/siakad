<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Guru_model extends CI_Model {
        public function hapusAdmin($id){
            $this->db->where('id', $id);
            $this->db->delete('user');
        }
        
    
    }
    
    /* End of file Guru_model.php */
    
?>