<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

public function __construct()
    {
        parent::__construct();
		$this->load->model('m_kelas');
		$this->load->model('m_siswa');
		$this->load->model('m_default');
		date_default_timezone_set('Asia/Jakarta');
                
    }
public function data_kelas()
	{
		$data['judul']="Data Kelas";
		$data['active8']='active';
		$data['konten']="data_kelas";
		$data['list_kelas']=$this->m_kelas->get_data_kelas()->result_array();
		$this->load->view('template',$data);		
	}
public function tambah_kelas()
	{
		$nama_kelas=$this->input->post('nama_kelas');
		$wali_kelas=$this->input->post('wali_kelas');
		$data=array(
			'nama_kelas' => $nama_kelas,
			'wali_kelas' => $wali_kelas
		);
		$this->m_default->input_data($data,'tblkelas');
		redirect('kelas/data_kelas','refresh');
	}
public function edit_kelas()
	{
		$nama_kelas=$this->input->post('nama_kelas');
		$wali_kelas=$this->input->post('wali_kelas');
		$data=array(
			'nama_kelas' => $nama_kelas,
			'wali_kelas' => $wali_kelas
		);
		$where=array('id_kelas'=>$this->input->post('id_kelas'));
		$this->m_default->update_data($where,$data,'tblkelas');
		redirect('kelas/data_kelas','refresh');
	}
public function edit_mapelkelas()
	{
		$id_kelas=$this->input->post('id_kelas');
		$mapel=$this->input->post('mapel');
		$data=array(
			'id_kelas' => $id_kelas,
			'mapel' => $mapel
		);
		$where=array('id_kelas'=>$id_kelas);
		$this->m_default->update_data($where,$data,'tblkelas');
		redirect('kelas/data_kelas','refresh');
	}
public function hapus_kelas()
	{
		$id_kelas=$this->uri->segment(3);
		$where=array('id_kelas'=>$id_kelas);
		$this->m_default->hapus_data($where,'tblkelas');
		redirect('kelas/data_kelas');
	}
}
?>