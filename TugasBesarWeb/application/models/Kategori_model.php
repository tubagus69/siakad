<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    public function getKategori($id_kategori = null){

        if($id_kategori === null){
            return $this->db->get('kategori')->result();
        }else{
            return $this->db->get_where('kategori', ['id_kategori' => $id_kategori])->result();
        }
    }

    public function deleteKategori($id_kategori){
        $this->db->delete('kategori', ['id_kategori' => $id_kategori]);
        return $this->db->affected_rows();
    }

    public function createKategori($data){
        $this->db->insert('kategori', $data );
        return $this->db->affected_rows();
    }

    public function updateKategori($data,$id_kategori){
        $this->db->update('kategori', $data ,['id_kategori'=>$id_kategori]) ;
        return $this->db->affected_rows();
    }
}   
