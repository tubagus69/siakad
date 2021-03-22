<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {

    public function getAllmahasiswa()
    {
       // https://codeigniter.com/user_guide/database/query_builder.html#selecting-data
       //$query = $this->db->get('mahasiswa');
       //https://codeigniter.com/user_guide/database/results.html
       //return $query->result_array();
       //https://codeigniter.com/user_guide/database/results.html#results_arrays

       return $this->db->get('mahasiswa')->result_array();
    }
    public function getAllsiswa(){
       return $this->db->get('siswa')->result_array();

    }
    public function tambahdatamhs()
    {
        $data=
        [
            "nama"=>$this->input->post("nama",true),
            "nim"=>$this->input->post("nim",true),
            "email"=>$this->input->post("email",true),
            "jurusan"=>$this->input->post("jurusan",true),              
        ];
        $this->db->insert('mahasiswa',$data);
    }

    public function hapusdatamhs($id)
    {
        $this->db->where('id', $id );
        $this->db->delete('mahasiswa');
    }
    public function getMahasiswaId($id){
        return $this->db->get_where('mahasiswa', array('id'=>$id))->row_array();   
    }
    public function editMahasiswa($id){
        $data= array(
            "nama"=> $this ->input->post('nama', true),
            "nim"=> $this ->input->post('nim', true),
            "email"=> $this ->input->post('email', true),
            "jurusan"=> $this ->input->post('jurusan', true)
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
        redirect('','refresh');
    }

}

/* End of file mahasiswa_model.php */

?>