<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {


public function __construct()
    {
        parent::__construct();
		$this->load->model('m_siswa');
		$this->load->model('m_mapel');
		$this->load->model('m_nilai');
		$this->load->model('m_default');
		date_default_timezone_set('Asia/Jakarta');
                
    }
public function data_nilai()
	{
		$data['judul']="Data Nilai";
		$data['active6']='active';
		$data['konten']="data_nilai";
		$data['list_kelas']=$this->m_default->get_data('tblkelas')->result_array();
		$this->load->view('template',$data);
	}
public function profil_nilai_siswa()
	{
		$id_siswa=$this->session->userdata('id_siswa');
		$id_kelas=$this->session->userdata('id_kelas');
		$data['judul']="Profil Nilai Siswa";
		$where=array('id_kelas'=>$id_kelas);
		$data['active12']='active';
		$data['list_mapel']=$this->m_default->get_data_detail($where,'tblkelas')->row_array();
		$data['konten']="profil_nilai_siswa";
		$this->load->view('template',$data);	
	}

public function nilai_siswa($id_kelas,$kode_mapel)
	{
		$data['siswa']=$this->m_siswa->get_siswakelas($id_kelas)->result_array();
		$where=array('id_kelas'=>$id_kelas);
		$nama_kelas=$this->m_default->get_data_detail($where,'tblkelas')->row_array();
		$data['judul']="List Nilai Siswa Kelas ".$nama_kelas['nama_kelas'];
		$data['active6']='active';
		$data['konten']="nilai_siswa";
		$this->load->view('template',$data);		
	}
public function nilai_siswa1($id_nilai)
	{
		$data['siswa']=$this->m_siswa->get_nilai($id_nilai)->result_array();
		$where=array('id_nilai'=>$id_nilai);
		$nama_nilai=$this->m_default->get_data_detail($where,'tblnilai')->row_array();
		$data['judul']="List Nilai Siswa Kelas ".$nama_nilai['nis'];
		$data['active6']='active';
		$data['konten']="nilai_siswa";
		$this->load->view('template',$data);		
	}
public function tambah_nilai()
	{
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		$this->form_validation->set_rules('nilai', 'Nilai', 'trim|required');
		$id_siswa=$this->input->post('id_siswa');
		$kode_mapel=$this->input->post('kode_mapel');
		$id_guru=$this->input->post('id_guru');
		$semester=$this->input->post('semester');
		$keterangan=$this->input->post('keterangan');
		$nilai=$this->input->post('nilai');
		if($this->form_validation->run() == TRUE){
			$data=array(
			'id_siswa' => $id_siswa,
			'kode_mapel' => $kode_mapel,
			'id_guru' => $id_guru,
			'keterangan' => $keterangan,
			'nilai' => $nilai,
			'semester' => $semester
		);
		$this->m_default->input_data($data,'tblnilai');
		$referred_from = $this->session->userdata('referred_from');
		redirect($referred_from, 'refresh');
		}
		else{
		$this->session->set_flashdata('pesan', validation_errors());
		$referred_from = $this->session->userdata('referred_from');
		redirect($referred_from, 'refresh');
	}
	}
public function edit_nilai($id_nilai)
	{
		$where=array('id_nilai'=>$id_nilai);
		$data['nilai']=$this->m_default->get_data_detail($where,'tblnilai')->row_array();
		$data['judul']="Update Nilai Siswa";
		$data['active3']='active';
		$data['konten']="edit_nilai";
		$this->load->view('template',$data);		
	}
public function proses_edit_nilai()
	{
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		$this->form_validation->set_rules('nilai', 'Nilai', 'trim|required');
		$semester=$this->input->post('semester');
		$keterangan=$this->input->post('keterangan');
		$nilai=$this->input->post('nilai');
		$where=array('id_nilai'=>$this->input->post('id_nilai'));
		if($this->form_validation->run() == TRUE){
			$data=array(
			'keterangan' => $keterangan,
			'nilai' => $nilai,
			'semester' => $semester
		);
		$this->m_default->update_data($where,$data,'tblnilai');
		$referred_from = $this->session->userdata('referred_from');
		redirect($referred_from, 'refresh');
		}
		else{
		$this->session->set_flashdata('pesan', validation_errors());
		$url='nilai/edit_nilai/'.$this->input->post('id_nilai');
		redirect($url, 'refresh');
	}
	}
public function hapus_nilai()
	{
		$id_nilai=$this->uri->segment(3);
		$where=array('id_nilai'=>$id_nilai);
		$this->m_default->hapus_data($where,'tblnilai');
		$referred_from = $this->session->userdata('referred_from');
		redirect($referred_from, 'refresh');
	}

}
?>