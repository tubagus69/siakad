<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {


public function __construct()
    {
        parent::__construct();
		$this->load->model('m_default');
		date_default_timezone_set('Asia/Jakarta');
                
    }
public function data_galeri()
	{
		$data['judul']="Data Galeri";
		$data['active13']='active';
		$data['konten']="data_galeri";
		$data['list_foto']=$this->m_default->get_data('tblgaleri')->result_array();
		$this->load->view('template',$data);	
	}

public function tambah_galeri()
	{
		$config['upload_path'] = './assets/img/galeri';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 4096;
		$this->load->library('upload', $config);
			if($_FILES['foto']['name']!=""){
			if (!$this->upload->do_upload('foto'))
			{
		$error = array('error' => $this->upload->display_errors());
		$this->session->set_flashdata('pesan1', $error);
		redirect('galeri/data_galeri','refresh');
		}else{
		$file =$this->upload->data('file_name');
		$data=array(
				'foto'=>$file
			);
		$this->m_default->input_data($data,'tblgaleri');
		redirect('galeri/data_galeri','refresh');
		}	
		}
		else{
			redirect('galeri/data_galeri');
		}
	}
public function edit_galeri()
	{
		$id_galeri=$this->input->post('id_galeri');
		$where=array('id_galeri'=>$id_galeri);
		$config['upload_path'] = './assets/img/galeri';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 4096;
		$this->load->library('upload', $config);
			if($_FILES['foto']['name']!=""){
			if (!$this->upload->do_upload('foto'))
			{
		$error = array('error' => $this->upload->display_errors());
		$this->session->set_flashdata('pesan1', $error);
		redirect('siswa/tambah_siswa','refresh');
		}else{
		$file =$this->upload->data('file_name');
		$data=array(
				'foto'=>$file
			);
		$this->m_default->update_data($where,$data,'tblgaleri');
		redirect('galeri/data_galeri','refresh');
		}	
		}
		else{
			redirect('galeri/data_galeri');
		}
	}
public function hapus_galeri()
	{
		$id_galeri=$this->uri->segment(3);
		$where=array('id_galeri'=>$id_galeri);
		$this->m_default->hapus_data($where,'tblgaleri');
		redirect('galeri/data_galeri');
	}
}
?>