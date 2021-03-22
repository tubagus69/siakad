<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

public function __construct()
    {
        parent::__construct();
		$this->load->model('m_default');
		$this->load->model('m_siswa');
		date_default_timezone_set('Asia/Jakarta');
                
    }
public function data_siswa()
	{
		if($this->session->userdata('tipe')!='admin'){
			redirect('user');
		}
		$data['judul']="Data Siswa";
		$data['active3']='active';
		$data['konten']="data_siswa";
		$data['list_kelas']=$this->m_default->get_data('tblkelas')->result_array();
		$this->load->view('template',$data);
	}
public function tambah_siswa()
	{
		$data['active3']='active';
		$data['konten']="tambah_siswa";
		$data['list_kelas']=$this->m_default->get_data('tblkelas')->result_array();
		$this->load->view('template',$data);
	}
public function proses_tambah_siswa()
	{
		$cek_id=$this->m_default->get_lastid('siswa');
		if($cek_id->row()->id==NULL){
			$id_siswa='sis001';
		}
		else{
			$tmp_id=$cek_id->row_array();
			$new_id=(string)((int)substr($tmp_id['id'],3,3)+1);
			$id_siswa='sis'.str_repeat('0', strlen($tmp_id['id'])-3-strlen($new_id)).$new_id;
		}
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('nis', 'NIS', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Siswa', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$nis=$this->input->post('nis');
		$nama=$this->input->post('nama');
		$password=$this->input->post('password');
		$tempat_lahir=$this->input->post('tempat_lahir');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$alamat=$this->input->post('alamat');
		$kelas=strtolower($this->input->post('kelas'));
		$semester=$this->input->post('semester');
		$no_telp=$this->input->post('no_telp');
		$jk=$this->input->post('jk');
		$agama=$this->input->post('agama');
		$config['upload_path'] = './assets/img/profile';
		$config['file_name'] = $id_siswa;
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 4096;
		$this->load->library('upload', $config);
		if($this->form_validation->run() == TRUE){
			if($_FILES['foto']['name']!=""){
			if (!$this->upload->do_upload('foto'))
			{
		$error = array('error' => $this->upload->display_errors());
		$this->session->set_flashdata('pesan1', $error);
		redirect('siswa/tambah_siswa','refresh');
		}else{
		$file =$this->upload->data('file_name');
		$data=array(
				'id_siswa'=>$id_siswa,
				'nis'=>$nis,
				'password'=>$password,
				'nama_siswa'=>$nama,
				'tempat_lahir'=>$tempat_lahir,
				'tgl_lahir'=>$tanggal_lahir,
				'alamat'=>$alamat,
				'id_kelas'=>$kelas,
				'semester'=>$semester,
				'no_telp'=>$no_telp,
				'jenis_kelamin'=>$jk,
				'agama'=>$agama,
				'foto'=>$file
			);
		$this->m_default->input_data($data,'tblsiswa');
		redirect('siswa/data_siswa','refresh');
		
		}	
		}
		else{
			$data=array(
				'id_siswa'=>$id_siswa,
				'nis'=>$nis,
				'password'=>$password,
				'nama_siswa'=>$nama,
				'tempat_lahir'=>$tempat_lahir,
				'tgl_lahir'=>$tanggal_lahir,
				'alamat'=>$alamat,
				'id_kelas'=>$kelas,
				'semester'=>$semester,
				'no_telp'=>$no_telp,
				'jenis_kelamin'=>$jk,
				'agama'=>$agama
			);
		$this->m_default->input_data($data,'tblsiswa');
		redirect('siswa/data_siswa','refresh');
		}
		}
		else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('siswa/tambah_siswa','refresh');
		}
	}
public function edit_siswa($id_siswa)
	{
		$where=array('id_siswa'=>$id_siswa);
		$data['siswa']=$this->m_default->get_data_detail($where,'tblsiswa')->row_array();
		$data['judul']="Update Data Siswa";
		$data['active3']='active';
		$data['list_kelas']=$this->m_default->get_data('tblkelas')->result_array();
		$data['konten']="edit_siswa";
		$this->load->view('template',$data);		
	}
public function proses_edit_siswa()
	{
		$this->form_validation->set_rules('nis', 'NIS', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Guru', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$id_siswa=$this->input->post('id_siswa');
		$nis=$this->input->post('nis');
		$password=$this->input->post('password');
		$nama=$this->input->post('nama');
		$tempat_lahir=$this->input->post('tempat_lahir');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$alamat=$this->input->post('alamat');
		$kelas=strtolower($this->input->post('kelas'));
		$semester=$this->input->post('semester');
		$no_telp=$this->input->post('no_telp');
		$agama=$this->input->post('agama');
		$where=array('id_siswa'=>$id_siswa);
		$config['upload_path'] = './assets/img/profile';
		$config['file_name'] = $id_siswa;
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
				'id_siswa'=>$id_siswa,
				'nis'=>$nis,
				'password'=>$password,
				'nama_siswa'=>$nama,
				'tempat_lahir'=>$tempat_lahir,
				'tgl_lahir'=>$tanggal_lahir,
				'alamat'=>$alamat,
				'id_kelas'=>$kelas,
				'semester'=>$semester,
				'no_telp'=>$no_telp,
				'agama'=>$agama,
				'foto'=>$file
			);
		$this->m_default->update_data($where,$data,'tblsiswa');
		echo "<script> window.history.back();</script>";
		
		}	
		}
		else{
			$data=array(
				'id_siswa'=>$id_siswa,
				'nis'=>$nis,
				'password'=>$password,
				'nama_siswa'=>$nama,
				'tempat_lahir'=>$tempat_lahir,
				'tgl_lahir'=>$tanggal_lahir,
				'alamat'=>$alamat,
				'id_kelas'=>$kelas,
				'semester'=>$semester,
				'no_telp'=>$no_telp,
				'agama'=>$agama
			);
		$this->m_default->update_data($where,$data,'tblsiswa');
		echo "<script> window.history.back();</script>";
		}
		}
		else{
			$this->session->set_flashdata('pesan', validation_errors());
			echo "<script> window.history.back();</script>";
		}
	}
public function hapus_siswa()
	{
		$id_siswa=$this->uri->segment(3);
		$where=array('id_siswa'=>$id_siswa);
		$this->m_default->hapus_data($where,'tblsiswa');
		redirect('siswa/data_siswa');
	}
public function profil_siswa()
{
		$data['judul']="Profil Siswa";
		$data['active14']='active';
		$data['konten']="profil";
		$where=array('id_siswa'=>$this->session->userdata('id_siswa'));
    	$data['siswa']=$this->m_default->get_data_detail($where,'tblsiswa')->row_array();
		$this->load->view('template',$data);
}
	
}
?>