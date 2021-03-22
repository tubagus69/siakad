<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class siswa_model extends CI_Model {
    
        public function getAllsiswa(){
            //https://www.codeigniter.com/user_guide/database/query_builder.html
            //$query digunakan untuk menampung isi dari tabel mahasiswa
            //$query=$this->db->get('mahasiswa');

            //https://www.codeigniter.com/user_guide/database/results.html
            //untuk menampilkan isi dari array
            //return $query->result_array();

            return $this->db->get('siswa')->result_array();
        }

        public function tambahdatassw(){
            $data=[
                'id'=>$this->input->post('id', true),
                'nama'=>$this->input->post('nama', true),
                'alamat'=>$this->input->post('alamat',true),
                'nim'=>$this->input->post('nim',true)
            ];
            $this->db->insert('siswa',$data);
        }

        public function hapusdatassw($id){
            $this->db->where('id',$id);
            $this->db->delete('siswa');
        }

        public function getsiswaByID($id)
        {
            return $this->db->get_where('siswa',['id' => $id])->row_array();
        }

        public function ubahdatassw(){
            $data=[
                'id'=>$this->input->post('id', true),
                'nama'=>$this->input->post('nama', true),
                'alamat'=>$this->input->post('alamat',true),
                'nim'=>$this->input->post('nim',true)
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('siswa', $data);
        }

        public function cariDataSiswa(){
            $keyword=$this->input->post('keyword');
            $this->db->like('nama', $keyword);
            $this->db->or_like('alamat', $keyword);
            $this->db->or_like('nim', $keyword);
            return $this->db->get('siswa')->result_array();
        }

        public function datatabels(){
            $query = $this->db->order_by('id','DESC')->get('siswa');
            return $query->result();
        }
    
    }   
    /* End of file mahasiswa_model.php */
?>
    