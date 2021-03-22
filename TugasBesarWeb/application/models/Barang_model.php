<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function getBarang($id_barang = null){

        if($id_barang === null){
        $this->db->select('barang.*, kategori.nama_kategori');
        $this->db->join('kategori', 'barang.id_kategori = kategori.id_kategori');
            return $this->db->get('barang')->result();
        }else{
            return $this->db->get_where('barang', ['id_barang' => $id_barang])->result();
        }
    }

    public function deleteBarang($id_barang){
        $this->db->delete('barang', ['id_barang' => $id_barang]);
        return $this->db->affected_rows();
    }

    public function createBarang($data){
        $this->db->insert('barang', $data );
        return $this->db->affected_rows();
    }

    public function updateBarang($data,$id_barang){
        $this->db->update('barang', $data ,['id_barang'=>$id_barang]) ;
        return $this->db->affected_rows();
    }
}    