<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class mahasiswa_model extends CI_Model {
    
        public function getAllmahasiswa()
        {
            //https://www.codeigniter.com/user_guide/database/query_builder.html
            //$query digunakan untuk menampung isi dari tabel mahasiswa
            $query=$this->db->get('mahasiswa');

            //https://www.codeigniter.com/user_guide/database/results.html
            //untuk menampilkan isi dari array
            return $query->result_array();

           //return $this->db->get('mahasiswa')->result_array();
        }

        public function tambahdatamhs()
        {
            $data=[
                'nama'=>$this->input->post('nama', true),
                'nim'=>$this->input->post('nim', true),
                'email'=>$this->input->post('email',true),
                'jurusan'=>$this->input->post('jurusan',true)
            ];
            $this->db->insert('mahasiswa',$data);
        }

        public function hapusdatamhs($id){
            $this->db->where('id',$id);
            $this->db->delete('mahasiswa');
        }

        public function getmahasiswaByID($id)
        {
            return $this->db->get_where('mahasiswa',['id' => $id])->row_array();
        }

        public function ubahdatamhs(){
            $data=[
                'nama'=>$this->input->post('nama', true),
                'nim'=>$this->input->post('nim', true),
                'email'=>$this->input->post('email',true),
                'jurusan'=>$this->input->post('jurusan',true)
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('mahasiswa', $data);
        }

        public function cariDataMahasiswa(){
            $keyword=$this->input->post('keyword');
            $this->db->like('nama', $keyword);
            $this->db->or_like('jurusan', $keyword);
            return $this->db->get('mahasiswa')->result_array();
        }

        public function datatabels(){
            $query = $this->db->order_by('id','DESC')->get('mahasiswa');
            return $query->result();
        }
    }
    
    /* End of file mahasiswa_model.php */
?>
    