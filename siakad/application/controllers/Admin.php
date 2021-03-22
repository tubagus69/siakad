<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

public function __construct()
    {
        parent::__construct();
		$this->load->model('m_default');
		date_default_timezone_set('Asia/Jakarta');
                
    }
public function data_admin()
	{
		$data['judul']="Data Admin";
		$data['active10']='active';
		$data['konten']="data_admin";
		$data['list_admin']=$this->m_default->get_data('tbladmin')->result_array();
		$this->load->view('template',$data);	
	}
public function tambah_admin()
	{
		$cek_id=$this->m_default->get_lastid('admin');
		if($cek_id->row()->id==NULL){
			$id_admin='adm001';
		}
		else{
			$tmp_id=$cek_id->row_array();
			$new_id=(string)((int)substr($tmp_id['id'],3,3)+1);
			$id_admin='adm'.str_repeat('0', strlen($tmp_id['id'])-3-strlen($new_id)).$new_id;
		}
		$this->form_validation->set_rules('nama', 'Nama Admin', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
		$nama=$this->input->post('nama');
		$nip=$this->input->post('nip');
		$password=$this->input->post('password');
		$config['upload_path'] = './assets/img/profile';
		$config['file_name'] = $id_admin;
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 4096;
		$this->load->library('upload', $config);
		if($this->form_validation->run() == TRUE){
			if($_FILES['foto']['name']!=""){
			if (!$this->upload->do_upload('foto'))
			{
		$error = array('error' => $this->upload->display_errors());
		$this->session->set_flashdata('pesan', $error);
		redirect('admin/data_admin','refresh');
		}else{
		$file =$this->upload->data('file_name');
		$data=array(
				'id_admin'=>$id_admin,
				'nip'=>$nip,
				'password'=>$password,
				'nama_admin'=>$nama,
				'foto'=>$file
			);
		$this->m_default->input_data($data,'tbladmin');
		redirect('admin/data_admin','refresh');
		
		}	
		}
		else{
			$data=array(
				'id_admin'=>$id_admin,
				'nip'=>$nip,
				'password'=>$password,
				'nama_admin'=>$nama
			);
		$this->m_default->input_data($data,'tbladmin');
		redirect('admin/data_admin','refresh');
		}
		}
		else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('admin/data_admin','refresh');
		}
		
	}
public function edit_admin()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
		$nama_admin=$this->input->post('nama');
		$nip=$this->input->post('nip');
		$password=$this->input->post('password');
		$id_admin=$this->input->post('id_admin');
		$where=array('id_admin'=>$id_admin);
		$config['upload_path'] = './assets/img/profile';
		$config['file_name'] = $id_admin;
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 4096;
		$this->load->library('upload', $config);
		if($this->form_validation->run() == TRUE){
			if($_FILES['foto']['name']!=""){
			if (!$this->upload->do_upload('foto'))
			{
		$error = array('error' => $this->upload->display_errors());
		$this->session->set_flashdata('pesan1', $error);
		echo "<script> window.history.back();</script>";
		}else{
		$file =$this->upload->data('file_name');
		$data=array(
				'nama_admin'=>$nama_admin,
				'nip'=>$nip,
				'password'=>$password,
				'foto'=>$file
			);
			$this->m_default->update_data($where,$data,'tbladmin');
			if($this->session->userdata('id_admin')==$id_admin){
				$this->session->set_userdata($data);	
			}
			
		echo "<script> window.history.back();</script>";		
		}	
		}
		else{
			$data=array(
				'nama_admin'=>$nama_admin,
				'nip'=>$nip,
				'password'=>$password
			);
			if($this->session->userdata('id_admin')==$id_admin){
				$this->session->set_userdata($data);	
			}
		$this->m_default->update_data($where,$data,'tbladmin');
		echo "<script> window.history.back();</script>";
		}
		}
		else{
			$this->session->set_flashdata('pesan', validation_errors());
		echo "<script> window.history.back();</script>";
		}
		
	}
public function hapus_admin()
	{
		$id_admin=$this->uri->segment(3);
		if($this->session->userdata('id_admin')==$id_admin){
			echo '<script>alert("Tidak dapat menghapus akun yang sedang login");window.history.back();</script>';
		}
		else{
		$where=array('id_admin'=>$id_admin);
		$this->m_default->hapus_data($where,'tbladmin');
		redirect('admin/data_admin');
		}
	}
}
?>