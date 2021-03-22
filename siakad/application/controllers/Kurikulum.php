<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum extends CI_Controller {

public function __construct()
    {
        parent::__construct();
		$this->load->model('m_default');
		date_default_timezone_set('Asia/Jakarta');
                
    }
public function data_kurikulum()
	{
		$data['judul']="Data Kurikulum";
		$data['active4']='active';
		$data['konten']="data_kurikulum";
		$data['list_kurikulum']=$this->m_default->get_data('tblkurikulum')->result_array();
		$this->load->view('template',$data);	
	}
public function tambah_kurikulum()
	{
		$nama_kurikulum=$this->input->post('nama');
		$status_kurikulum=$this->input->post('status');
		$data=array(
			'nama_kurikulum' => $nama_kurikulum,
			'status_kurikulum' => $status_kurikulum
		);
		if($status_kurikulum==1){
			$data1=array('status_kurikulum'=>'0');
			$this->m_default->update_all($data1,'tblkurikulum');
		}
		$this->m_default->input_data($data,'tblkurikulum');
		redirect('Kurikulum/data_kurikulum','refresh');
	}
public function edit_kurikulum()
	{
		$nama_kurikulum=$this->input->post('nama');
		$status_kurikulum=$this->input->post('status');
		$data=array(
			'nama_kurikulum' => $nama_kurikulum,
			'status_kurikulum' => $status_kurikulum
		);
		$where=array('id_kurikulum'=>$this->input->post('id_kurikulum'));
		if($status_kurikulum==1){
			$data1=array('status_kurikulum'=>'0');
			$this->m_default->update_all($data1,'tblkurikulum');
		}
		$this->m_default->update_data($where,$data,'tblkurikulum');
		redirect('Kurikulum/data_kurikulum','refresh');
	}
public function hapus_kurikulum()
	{
		$id_kurikulum=$this->uri->segment(3);
		$where=array('id_kurikulum'=>$id_kurikulum);
		$this->m_default->hapus_data($where,'tblkurikulum');
		redirect('kurikulum/data_kurikulum');
	}
}
?>