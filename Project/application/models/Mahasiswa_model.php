<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class mahasiswa_model extends CI_Model {
  
      public function getAllMahasiswa(){
        return $this->db->get('mahasiswa') -> result_array();
      }

      public function getUser(){
        return $this->db->get('user') -> result_array();
      }

      public function getUserUserUser(){
        return $this->db->get('user')->result_array();
      }

      public function tambaDataMhs(){
        $data =
        array(
          "nama" => $this->input->post("nama",true),
          "nim" => $this->input->post("nim",true),
          "email" => $this->input->post("email",true),
          "jurusan" => $this->input->post("jurusan",true),
          "foto" => $this->input->post("foto",true),
        );
        $this->db->insert('mahasiswa',$data);
      }

      public function hapusDataMhs($id){
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');       
      }
  
      public function getMahasiswaById($id){
        return $this->db->get_where('mahasiswa',array('id'=>$id))->row_array();
      }
      public function cariDataAdmin($keyword){
        return $this->db->get_where('user',array('username'=>$keyword))->result_array();
      }

      public function ubahDataMhs(){
        $data =
        array(
          "nama" => $this->input->post("nama",true),
          "nim" => $this->input->post("nim",true),
          "email" => $this->input->post("email",true),
          "jurusan" => $this->input->post("jurusan",true),
          "foto" => $this->input->post("foto",true),

        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
      }

      public function cariDatamahasiswa(){
        $keyword = $this->input->post("keyword");
        $this->db->like('nama',$keyword);
        $this->db->or_like('nim',$keyword);
        return $this->db->get('mahasiswa') -> result_array();
      }

      public function dataTables(){
        return $this->db->order_by('id', 'desc')->get('mahasiswa')->result();
        
      }

  }
  
  /* End of file mahasiswa_model.php */
  
?>