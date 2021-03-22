<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getLogin($id_login = null){

        if($id_login === null){
            return $this->db->get('login')->result();
        }else{
            return $this->db->get_where('login', ['id_login' => $id_login])->result();
        }
    }

    public function deleteUser($id_login){
        $this->db->delete('login', ['id_login' => $id_login]);
        return $this->db->affected_rows();
    }

    public function createUser($data){
        $this->db->insert('login', $data );
        return $this->db->affected_rows();
    }

    public function updateUser($data,$id_login){
        $this->db->update('login', $data ,['id_login'=>$id_login]) ;
        return $this->db->affected_rows();
    }

    public function login($uname, $pass){
        $this->db->where('username', $uname);
        $this->db->where('password', $pass);
        $this->db->where('status', 'aktif');
        
        return $this->db->get('login')->result();
    }

}    