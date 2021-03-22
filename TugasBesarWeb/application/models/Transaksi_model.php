<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

    public function getTransaksi($id_transaksi = null){

        if($id_transaksi === null){
            $this->db->select('transaksi.*, barang.nama_barang');
            $this->db->join('barang', 'transaksi.id_barang = barang.id_barang');
            return $this->db->get('transaksi')->result();
        }else{
            $this->db->select('transaksi.*, barang.nama_barang');
            $this->db->join('barang', 'transaksi.id_barang = barang.id_barang');
            return $this->db->get_where('transaksi', ['id_transaksi' => $id_transaksi])->result();
        }
    }

    public function getTransById($id)
    {
        $this->db->select('transaksi.*, barang.nama_barang');
        $this->db->join('barang', 'transaksi.id_barang = barang.id_barang');
        return $this->db->get_where('transaksi', ['id_transaksi' => $id])->result();
    }

    public function deleteTransaksi($id_transaksi){
        $this->db->delete('transaksi', ['id_transaksi' => $id_transaksi]);
        return $this->db->affected_rows();
    }

    public function createTransaksi($data){
        $this->db->insert('transaksi', $data);
        return $this->db->affected_rows();
    }

    public function updateTransaksi($data,$id_transaksi){
        $this->db->update('transaksi', $data ,['id_transaksi'=>$id_transaksi]) ;
        return $this->db->affected_rows();
    }
}    