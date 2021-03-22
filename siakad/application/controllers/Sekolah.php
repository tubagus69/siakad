<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {


public function __construct()
    {
        parent::__construct();
		$this->load->model('m_default');
		date_default_timezone_set('Asia/Jakarta');
                
    }
public function data_sekolah()
	{
		$data['judul']="Data Sekolah";
		$data['active7']='active';
		$data['konten']="data_sekolah";
		$this->load->view('template',$data);
	}

public function tambah_data_sekolah()
	{
		$this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim|required');
		$this->form_validation->set_rules('npsn', 'NPSN', 'trim|required');
		$this->form_validation->set_rules('nss', 'NSS', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat Sekolah', 'trim|required');
		$this->form_validation->set_rules('kode_pos', 'Kode Pos', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required');
		$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
		$this->form_validation->set_rules('kabupaten', 'Kabupaten', 'trim|required');
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
		$this->form_validation->set_rules('visi', 'Visi', 'trim|required');
		$this->form_validation->set_rules('misi', 'Misi', 'trim|required');
		$nama_sekolah=$this->input->post('nama_sekolah');
		$npsn=$this->input->post('npsn');
		$nss=$this->input->post('nss');
		$alamat=$this->input->post('alamat');
		$kode_pos=$this->input->post('kode_pos');
		$no_telp=$this->input->post('no_telp');
		$kelurahan=$this->input->post('kelurahan');
		$kecamatan=$this->input->post('kecamatan');
		$kabupaten=$this->input->post('kabupaten');
		$provinsi=$this->input->post('provinsi');
		$website=$this->input->post('website');
		$email=$this->input->post('email');
		$visi=$this->input->post('visi');
		$misi=$this->input->post('misi');
		if ($this->form_validation->run() == TRUE) {
			$data=array(
				'nama_sekolah'=>$nama_sekolah,
				'npsn'=>$npsn,
				'nss'=>$nss,
				'alamat_sekolah'=>$alamat,
				'kode_pos'=>$kode_pos,
				'no_telp'=>$no_telp,
				'kelurahan'=>$kelurahan,
				'kecamatan'=>$kecamatan,
				'kabupaten'=>$kabupaten,
				'provinsi'=>$provinsi,
				'website'=>$website,
				'email'=>$email,
				'visi'=>$visi,
				'misi'=>$misi
			);
			$proses=$this->m_default->input_data($data,'tblsekolah');
			if($proses){
				echo '<script>alert("Sukses menambah data")</script>';
				redirect('user','refresh');
			}
			else{
				$this->session->set_flashdata('pesan', 'Gagal menambah data');
				redirect('sekolah/data_sekolah','refresh');
			}
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('sekolah/data_sekolah','refresh');
		}	
	}

	public function update_sekolah()
	{
		$data['judul']="Update Data Sekolah";
		$data['active7']='active';
		$data['konten']="update_sekolah";
		$this->load->view('template',$data);	
	}

	public function proses_update_sekolah()
	{
		$this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim|required');
		$this->form_validation->set_rules('npsn', 'NPSN', 'trim|required');
		$this->form_validation->set_rules('nss', 'NSS', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat Sekolah', 'trim|required');
		$this->form_validation->set_rules('kode_pos', 'Kode Pos', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required');
		$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
		$this->form_validation->set_rules('kabupaten', 'Kabupaten', 'trim|required');
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
		$this->form_validation->set_rules('visi', 'Visi', 'trim|required');
		$this->form_validation->set_rules('misi', 'Misi', 'trim|required');
		$visi=$this->input->post('visi');
		$misi=$this->input->post('misi');
		$id_sekolah=$this->input->post('id_sekolah');
		$nama_sekolah=$this->input->post('nama_sekolah');
		$npsn=$this->input->post('npsn');
		$nss=$this->input->post('nss');
		$alamat=$this->input->post('alamat');
		$kode_pos=$this->input->post('kode_pos');
		$no_telp=$this->input->post('no_telp');
		$kelurahan=$this->input->post('kelurahan');
		$kecamatan=$this->input->post('kecamatan');
		$kabupaten=$this->input->post('kabupaten');
		$provinsi=$this->input->post('provinsi');
		$website=$this->input->post('website');
		$email=$this->input->post('email');
		$visi=$this->input->post('visi');
		$misi=$this->input->post('misi');
		if ($this->form_validation->run() == TRUE) {
			$data=array(
				'nama_sekolah'=>$nama_sekolah,
				'npsn'=>$npsn,
				'nss'=>$nss,
				'alamat_sekolah'=>$alamat,
				'kode_pos'=>$kode_pos,
				'no_telp'=>$no_telp,
				'kelurahan'=>$kelurahan,
				'kecamatan'=>$kecamatan,
				'kabupaten'=>$kabupaten,
				'provinsi'=>$provinsi,
				'website'=>$website,
				'visi'=>$visi,
				'misi'=>$misi,
				'email'=>$email
			);
			$where=array('id_sekolah'=>$id_sekolah);
			$this->m_default->update_data($where,$data,'tblsekolah');
			redirect('sekolah/data_sekolah');
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('sekolah/update_sekolah','refresh');
		}		
	}

}
?>