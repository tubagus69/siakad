<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class pasien_model extends CI_Model {
    
        public function getAllpasien()
        {
            //https://www.codeigniter.com/user_guide/database/query_builder.html
            //$query digunakan untuk menampung isi dari tabel mahasiswa
            $query=$this->db->get('pasien');

            //https://www.codeigniter.com/user_guide/database/results.html
            //untuk menampilkan isi dari array
            return $query->result_array();

           //return $this->db->get('mahasiswa')->result_array();
        }

        public function tambahdatapsn()
        {
            $data=[
                'no'=>$this->input->post('no', true),
                'nama'=>$this->input->post('nama', true),
                'jeniskelamin'=>$this->input->post('jeniskelamin',true),
                'alamat'=>$this->input->post('alamat',true),
                'tanggallahir'=>$this->input->post('tanggallahir',true),
                'norekammedik'=>$this->input->post('norekammedik',true),
                'tanggalkedokter'=>$this->input->post('tanggalkedokter',true),
                'diagnosa'=>$this->input->post('diagnosa',true),
                'penanganan'=>$this->input->post('penanganan',true)
            ];
            $this->db->insert('pasien',$data);
        }

        public function hapusdatapsn($no){
            $this->db->where('no',$no);
            $this->db->delete('pasien');
        }

        public function getpasienByID($id)
        {
            return $this->db->get_where('pasien',['no' => $id])->row_array();
        }

        public function ubahdatapsn(){
            $data=[
                'no'=>$this->input->post('no', true),
                'nama'=>$this->input->post('nama', true),
                'jeniskelamin'=>$this->input->post('jeniskelamin',true),
                'alamat'=>$this->input->post('alamat',true),
                'tanggallahir'=>$this->input->post('tanggallahir',true),
                'norekammedik'=>$this->input->post('norekammedik',true),
                'tanggalkedokter'=>$this->input->post('tanggalkedokter',true),
                'diagnosa'=>$this->input->post('diagnosa',true),
                'penanganan'=>$this->input->post('penanganan',true)
            ];
            $this->db->where('no', $this->input->post('no'));
            $this->db->update('pasien', $data);
        }

        public function cariDatapasien(){
            $keyword=$this->input->post('keyword');
            $this->db->like('nama', $keyword);
            $this->db->or_like('alamat', $keyword);
            return $this->db->get('pasien')->result_array();
        }

        public function datatabels(){
            $query = $this->db->order_by('no','DESC')->get('pasien');
            return $query->result();
        }
    }
    
    /* End of file mahasiswa_model.php */
?>
    