<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

public function __construct()
    {
        parent::__construct();
		$this->load->model('m_default');
		date_default_timezone_set('Asia/Jakarta');
                
    }
public function data_guru()
	{
		$data['judul']="Data Guru";
		$data['active2']='active';
		$data['konten']="data_guru";
		$data['list_guru']=$this->m_default->get_data('tblguru')->result_array();
		$this->load->view('template',$data);
	}
public function tambah_guru()
	{
		$data['active2']='active';
		$data['konten']="tambah_guru";
		$this->load->view('template',$data);
	}
public function proses_tambah_guru()
	{
		$cek_id=$this->m_default->get_lastid('guru');
		if($cek_id->row()->id==NULL){
			$id_guru='gur001';
		}
		else{
			$tmp_id=$cek_id->row_array();
			$new_id=(string)((int)substr($tmp_id['id'],3,3)+1);
			$id_guru='gur'.str_repeat('0', strlen($tmp_id['id'])-3-strlen($new_id)).$new_id;
		}
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Guru', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$nip=$this->input->post('nip');
		$nama=$this->input->post('nama');
		$password=$this->input->post('password');
		$tempat_lahir=$this->input->post('tempat_lahir');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$alamat=$this->input->post('alamat');
		$jabatan=$this->input->post('jabatan');
		$no_telp=$this->input->post('no_telp');
		$jk=$this->input->post('jk');
		$agama=$this->input->post('agama');
		$config['upload_path'] = './assets/img/profile';
		$config['file_name'] = $id_guru;
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 4096;
		$this->load->library('upload', $config);
		if($this->form_validation->run() == TRUE){
			if($_FILES['foto']['name']!=""){
			if (!$this->upload->do_upload('foto'))
			{
		$error = array('error' => $this->upload->display_errors());
		$this->session->set_flashdata('pesan1', $error);
		redirect('guru/tambah_guru','refresh');
		}else{
		$file =$this->upload->data('file_name');
		$data=array(
				'id_guru'=>$id_guru,
				'nip'=>$nip,
				'password'=>$password,
				'nama_guru'=>$nama,
				'tempat_lahir'=>$tempat_lahir,
				'tgl_lahir'=>$tanggal_lahir,
				'alamat'=>$alamat,
				'jabatan'=>$jabatan,
				'no_telp'=>$no_telp,
				'jenis_kelamin'=>$jk,
				'agama'=>$agama,
				'foto'=>$file
			);
		$this->m_default->input_data($data,'tblguru');
		redirect('guru/data_guru','refresh');
		
		}	
		}
		else{
			$data=array(
				'id_guru'=>$id_guru,
				'nip'=>$nip,
				'password'=>$password,
				'nama_guru'=>$nama,
				'tempat_lahir'=>$tempat_lahir,
				'tgl_lahir'=>$tanggal_lahir,
				'alamat'=>$alamat,
				'jabatan'=>$jabatan,
				'no_telp'=>$no_telp,
				'jenis_kelamin'=>$jk,
				'agama'=>$agama
			);
		$this->m_default->input_data($data,'tblguru');
		redirect('guru/data_guru','refresh');
		}
		}
		else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('guru/tambah_guru','refresh');
		}
		
	}
	public function edit_guru()
	{
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Guru', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$nip=$this->input->post('nip');
		$password=$this->input->post('password');
		$nama=$this->input->post('nama');
		$tempat_lahir=$this->input->post('tempat_lahir');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$alamat=$this->input->post('alamat');
		$jabatan=$this->input->post('jabatan');
		$no_telp=$this->input->post('no_telp');
		$agama=$this->input->post('agama');
		$id_guru=$this->input->post('id_guru');
		$where=array('id_guru'=>$id_guru);
		$config['upload_path'] = './assets/img/profile';
		$config['file_name'] = $id_guru;
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
				'id_guru'=>$id_guru,
				'nip'=>$nip,
				'nama_guru'=>$nama,
				'password'=>$password,
				'tempat_lahir'=>$tempat_lahir,
				'tgl_lahir'=>$tanggal_lahir,
				'alamat'=>$alamat,
				'jabatan'=>$jabatan,
				'no_telp'=>$no_telp,
				'agama'=>$agama,
				'foto'=>$file
			);
			$this->m_default->update_data($where,$data,'tblguru');
		echo "<script> window.history.back();</script>";		
		}	
		}
		else{
			$data=array(
				'id_guru'=>$id_guru,
				'nip'=>$nip,
				'password'=>$password,
				'nama_guru'=>$nama,
				'tempat_lahir'=>$tempat_lahir,
				'tgl_lahir'=>$tanggal_lahir,
				'alamat'=>$alamat,
				'jabatan'=>$jabatan,
				'no_telp'=>$no_telp,
				'agama'=>$agama
			);
		$this->m_default->update_data($where,$data,'tblguru');
		echo "<script> window.history.back();</script>";
		}
		}
		else{
			$this->session->set_flashdata('pesan', validation_errors());
			echo "<script> window.history.back();</script>";
		}
	}
public function hapus_guru()
	{
		$id_guru=$this->uri->segment(3);
		$where=array('id_guru'=>$id_guru);
		$this->m_default->hapus_data($where,'tblguru');
		redirect('guru/data_guru');
	}
public function profil_guru()
{
		$data['judul']="Profil Guru";
		$data['active14']='active';
		$data['konten']="profil";
		$where=array('id_guru'=>$this->session->userdata('id_guru'));
    	$data['guru']=$this->m_default->get_data_detail($where,'tblguru')->row_array();
		$this->load->view('template',$data);
}
}
?>
