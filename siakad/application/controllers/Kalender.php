<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalender extends CI_Controller {

public function __construct()
    {
        parent::__construct();
		$this->load->model('m_kalender');
		$this->load->model('m_default');
		date_default_timezone_set('Asia/Jakarta');
                
    }
public function data_kalender()
	{
		$data['judul']="Data Kalender";
		$data['active11']='active';
		$data['konten']="data_kalender";
		$data['list_kalender']=$this->m_kalender->get_kalender()->result_array();
		$this->load->view('template',$data);	
	}
public function tambah_kalender()
	{
		$tgl_mulai=$this->input->post('tgl_mulai');
		$tgl_selesai=$this->input->post('tgl_selesai');
		$keterangan=$this->input->post('keterangan');
		if($tgl_mulai<=$tgl_selesai){
		$data=array(
			'tgl_mulai' => $tgl_mulai,
			'tgl_selesai' => $tgl_selesai,
			'keterangan' => $keterangan
		);
		$this->m_default->input_data($data,'tblkalender');
		redirect('kalender/data_kalender','refresh');
		}
		else{
			$this->session->set_flashdata('pesan','tanggal mulai harus lebih dulu daripada tanggal selesai');
			redirect('kalender/data_kalender','refresh');
		}		
	}
public function edit_kalender()
	{
		$id_kalender=$this->input->post('id_kalender');
		$tgl_mulai=$this->input->post('tgl_mulai');
		$tgl_selesai=$this->input->post('tgl_selesai');
		$keterangan=$this->input->post('keterangan');
		$where=array('id_kalender'=>$id_kalender);
		if($tgl_mulai<=$tgl_selesai){
		$data=array(
			'tgl_mulai' => $tgl_mulai,
			'tgl_selesai' => $tgl_selesai,
			'keterangan' => $keterangan
		);
		$this->m_default->update_data($where,$data,'tblkalender');
		redirect('kalender/data_kalender','refresh');
		}
		else{
			$this->session->set_flashdata('pesan','tanggal mulai harus lebih dulu daripada tanggal selesai');
			redirect('kalender/data_kalender','refresh');
		}		
	}
public function hapus_kalender()
	{
		$id_kalender=$this->uri->segment(3);
		$where=array('id_kalender'=>$id_kalender);
		$this->m_default->hapus_data($where,'tblkalender');
		redirect('kalender/data_kalender');
	}
public function view_kalender()
{
		$data['judul']="Kalender Akademik";
		$data['active11']='active';
		$data['konten']="kalender_akademik";
		$data['list_kalender']=$this->m_kalender->get_kalender()->result_array();
		$this->load->view('template',$data);	
}
}
?>