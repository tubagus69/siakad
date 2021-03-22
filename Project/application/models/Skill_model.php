<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Skill_model extends CI_Model {
  
      public function getAllSkill(){
        return $this->db->get('pemain') -> result_array();
      }

      public function hapusDataSkill($id){
        $this->db->where('id', $id);
        $this->db->delete('pemain');       
      }

      public function tambaDataSkill(){
        $data =
        array(
          "nama" => $this->input->post("nama",true),
          "speed" => $this->input->post("speed",true),
          "drible" => $this->input->post("drible",true),
          "power" => $this->input->post("power",true),
                    
        );
        $this->db->insert('pemain',$data);
      }
      public function getDataSkillById($id){
        return $this->db->get_where('pemain',array('id'=>$id))->row_array();
      }

      public function editDataSkill(){
        $data =
        array(
          "id" => $this->input->post("id",true),
          "nama" => $this->input->post("nama",true),
          "speed" => $this->input->post("speed",true),
          "drible" => $this->input->post("drible",true),
          "power" => $this->input->post("power",true),
          

        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pemain', $data);
      }

      public function datatables(){
        return $this->db->order_by('id', 'desc')->get('pemain')->result();
      }

      public function cariDataSkill(){
        $keyword = $this->input->post("keyword");
        $this->db->like('nama',$keyword);
        $this->db->or_like('speed',$keyword);
        $this->db->or_like('drible',$keyword);
        
        return $this->db->get('pemain') -> result_array();
      }

      
     
  }
  
  /* End of file Skill_model.php */
  
?>