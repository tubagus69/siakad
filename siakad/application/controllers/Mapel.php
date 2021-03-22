<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {


public function __construct()
    {
        parent::__construct();
		$this->load->model('m_mapel');
		$this->load->model('m_default');
		date_default_timezone_set('Asia/Jakarta');
                
    }
public function data_mapel()
	{
		$data['judul']="Data Mapel";
		$data['active5']='active';
		$data['konten']="data_mapel";
		$data['list_mapel']=$this->m_mapel->get_mapel()->result_array();
		$this->load->view('template',$data);	
	}

public function tambah_mapel()
	{
		$cek_kode=$this->m_mapel->get_lastkode();
		if($cek_kode->row()->kode==NULL){
			$kode_mapel='mpl001';
		}
		else{
			$tmp_kode=$cek_kode->row_array();
			$new_kode=(string)((int)substr($tmp_kode['kode'],3,3)+1);
			$kode_mapel='mpl'.str_repeat('0', strlen($tmp_kode['kode'])-3-strlen($new_kode)).$new_kode;
		}
		$where=array('status_kurikulum'=>'1');
		$kurikulum=$this->m_default->get_data_detail($where,'tblkurikulum')->row_array();
		$nama_mapel=$this->input->post('nama');
		$id_kurikulum=$kurikulum['id_kurikulum'];
		$kd_mapel=$this->input->post('kd_mapel');
		$kkm=$this->input->post('kkm');
		$data=array(
			'kode_mapel' => $kode_mapel,
			'nama_mapel' => $nama_mapel,
			'id_kurikulum' => $id_kurikulum,
			'kd_mapel' => $kd_mapel,
			'kkm' => $kkm
		);
		$this->m_default->input_data($data,'tblmapel');
		redirect('mapel/data_mapel','refresh');
	}
public function edit_mapel()
	{
		$nama_mapel=$this->input->post('nama');
		$kd_mapel=$this->input->post('kd_mapel');
		$kkm=$this->input->post('kkm');
		$data=array(
			'nama_mapel' => $nama_mapel,
			'kd_mapel' => $kd_mapel,
			'kkm' => $kkm
		);
		$where=array('kode_mapel'=>$this->input->post('kode_mapel'));
		$this->m_default->update_data($where,$data,'tblmapel');
		redirect('mapel/data_mapel','refresh');
	}
public function hapus_mapel()
	{
		$kode_mapel=$this->uri->segment(3);
		$where=array('kode_mapel'=>$kode_mapel);
		$this->m_default->hapus_data($where,'tblmapel');
		redirect('mapel/data_mapel');
	}
}
?>