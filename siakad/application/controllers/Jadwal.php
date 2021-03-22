<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

public function __construct()
    {
        parent::__construct();
		$this->load->model('m_jadwal');
		$this->load->model('m_default');
		date_default_timezone_set('Asia/Jakarta');
                
    }
public function data_jadwal()
	{
		$data['judul']="Data Jadwal";
		$data['active9']='active';
		$data['konten']="data_jadwal";
		if($this->session->userdata('tipe')=='guru'){
		$data['list_jadwal']=$this->m_default->get_data('tbljadwal')->result_array();	
		}
		else{
		$data['list_jadwal']=$this->m_jadwal->jadwal_kelas($this->session->userdata('id_kelas'))->result_array();		
		}
		$data['list_kelas']=$this->m_default->get_data('tblkelas')->result_array();
		
		$this->load->view('template',$data);	
	}
public function tambah_jadwal()
	{
		$hari=$this->input->post('hari');
		$id_kelas=$this->input->post('kelas');
		$jadwal=$this->input->post('jadwal');
			$data=array(
			'hari' => $hari,
			'id_kelas' => $id_kelas,
			'jadwal' => $jadwal
		);
		$this->m_default->input_data($data,'tbljadwal');	
		redirect('jadwal/data_jadwal','refresh');
	}
public function edit_jadwal($id_jadwal)
	{
		$data['active9']='active';
		$where=array('id_jadwal'=>$id_jadwal);
		$data['jadwal']=$this->m_default->get_data_detail($where,'tbljadwal')->row_array();
		$data['list_kelas']=$this->m_default->get_data('tblkelas')->result_array();
		$data['konten']="edit_jadwal";
		$this->load->view('template',$data);
	}
public function proses_edit_jadwal()
	{
		$id_jadwal=$this->input->post('id_jadwal');
		$hari=$this->input->post('hari');
		$id_kelas=$this->input->post('kelas');
		$jadwal=$this->input->post('jadwal');
		$where=array('id_jadwal'=>$id_jadwal);
		$data=array(
			'hari' => $hari,
			'id_kelas' => $id_kelas,
			'jadwal' => $jadwal
		);
		$this->m_default->update_data($where,$data,'tbljadwal');	
		redirect('jadwal/data_jadwal','refresh');
	}
public function hapus_jadwal()
	{
		$id_jadwal=$this->uri->segment(3);
		$where=array('id_jadwal'=>$id_jadwal);
		$this->m_default->hapus_data($where,'tbljadwal');
		redirect('jadwal/data_jadwal');
	}

}
?>