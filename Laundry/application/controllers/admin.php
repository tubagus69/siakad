<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

private $_template = "menu_admin";

function __construct()
{
	parent:: __construct();
	if(!$this->session->userdata("NAMA")):
         redirect('welcome');
    endif;
	$this->load->model('admin_model');
}

	function index()
	{
		$data['halaman'] = 'admin/home';
		$this->load->view( $this->_template,$data);
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}

	function data_pelanggan()
	{
		$data['halaman'] = 'admin/data_pelanggan';
		$data['data'] = $this->admin_model->tampil_pelanggan();
		$this->load->view( $this->_template,$data);
	}
	function insert_pelanggan()
	{
		$data['halaman'] = 'admin/tambah_data_pelanggan';
		$data['tarif'] = $this->admin_model->data_tarif();
		$this->load->view( $this->_template,$data);
	}
	function tambah_pelanggan()
	{
		$nometer = $this->input->post('nometer');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		// $kode = $this->input->post('kode');

		$data = array(
			'NOMETER' =>$nometer ,
			'NAMA' =>$nama ,
			'USERNAME' =>$nama ,
			'PASSWORD' =>$nama ,
			'ALAMAT' =>$alamat ,
			 );
			// 'KODETARIF' =>$kode 
		$this->db->insert('pelanggan',$data);

		// $id_last = $this->db->insert_id();
		// // echo $dasd;exit();
		// $data1 = array(
		// 	'IDPELANGGAN' =>$id_last ,
		// 	 );
		// $this->db->insert('penggunaan',$data1);
		// $this->db->insert('tagihan',$data1);		
		redirect('admin/data_pelanggan');
	}
	function update_pelanggan($id)
	{
		$data['halaman'] = 'admin/edit_data_pelanggan';
		$data['data'] = $this->admin_model->tampil_pelanggan_by_id($id);
		$data['tarif'] = $this->admin_model->data_tarif();
		$this->load->view( $this->_template,$data);
	}
	function edit_pelanggan()
	{
		$id = $this->input->post('id');
		$nometer = $this->input->post('nometer');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$kode = $this->input->post('kode');

		$data = array(
			'NOMETER' =>$nometer ,
			'NAMA' =>$nama ,
			'ALAMAT' =>$alamat ,
			'KODETARIF' =>$kode 
			 );
		$this->db->where('IDPELANGGAN',$id);
		$this->db->update('pelanggan',$data);
		redirect('admin/data_pelanggan');
	}
	function delete_pelanggan($id)
	{
		$this->db->where('IDPELANGGAN',$id);
		$this->db->delete('pelanggan');
		redirect('admin/data_pelanggan');
	}
	function data_tarif()
	{
		$data['halaman'] = 'admin/data_tarif';
		$data['data'] = $this->admin_model->tampil_tarif();
		$this->load->view( $this->_template,$data);
	}
	function update_tarif($id)
	{
		$data['halaman'] = 'admin/edit_data_tarif';
		$data['data'] = $this->admin_model->tampil_tarif_by_id($id);
		// $data['tarif'] = $this->admin_model->data_tarif();
		$this->load->view( $this->_template,$data);
	}
	function edit_tarif()
	{
		$kode = $this->input->post('kode');
		$daya = $this->input->post('daya');
		$tarif = $this->input->post('tarif');

		$data = array(
			'DAYA' =>$daya ,
			'TARIFPERKWH' =>$tarif
			 );
		$this->db->where('KODETARIF',$kode);
		$this->db->update('tarif',$data);
		redirect('admin/data_tarif');
	}
	function delete_tarif($id)
	{
		$this->db->where('KODETARIF',$id);
		$this->db->delete('tarif');
		redirect('admin/data_tarif');
	}
	function data_laporan()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		if ($bulan == 0 && $tahun == 0) {
			$data['data'] = $this->admin_model->tampil_laporan();
		}elseif ($bulan > 0 && $tahun == 0) {
			$data['data'] = $this->admin_model->tampil_laporan_alltahun($bulan);
		}elseif ($bulan == 0 && $tahun > 0) {
			$data['data'] = $this->admin_model->tampil_laporan_allbulan($tahun);
		}else{
			$data['data'] = $this->admin_model->tampil_laporan_by_tahun_bulan($bulan,$tahun);
		}

		$data['halaman'] = 'admin/data_laporan';
  		
		$this->load->view( $this->_template,$data);
	}
	function cetak_laporan()
	{
		$data['data'] = $this->admin_model->cetak_laporan();
		$this->load->view('admin/cetak_laporan',$data);
	}
	function data_petugas(){
  		$data['halaman'] = "admin/data_petugas";
  		$data['data'] = $this->admin_model->tampil_petugas();
  		$this->load->view($this->_template,$data);
  	}
  	function tambah_petugas(){
  		$nama = $this->input->post('nama');
  		$alamat = $this->input->post('alamat');
  		$jk = $this->input->post('jk');
  		$level = $this->input->post('level');

  		$data = array(
  			'NAMA' => $nama,
  			'USERNAME' => $nama,
  			'PASSWORD' => $nama,
  			'ALAMAT' => $alamat,
  			'JENIS_KELAMIN' => $jk,
  			'LEVEL' => $level, );
  		$this->db->insert('user',$data);
  		redirect('admin/data_petugas');
  	}
  	function filter_data_laporan()
	{
		$a = $this->input->post('bulan');
		$b = $this->input->post('tahun');

		$cek = $this->admin_model->tampil_data_laporan($a,$b);

		if ($cek) {
			// echo $a.$b;
			echo 1;
		}else{
			echo 0;
		}
	}

	function profile()
	{
		$data['halaman'] = 'admin/profile';
		$data['data'] = $this->admin_model->data_profile();
		$this->load->view($this->_template,$data);
	}

	function tambah_tarif(){
  		$daya = $this->input->post('daya');
  		$tarif = $this->input->post('tarif');

  		$cek = $this->admin_model->coba_coba();
  		$nourut = (int) substr($cek->aa,2,3);
  		$nourut++;
  		$char = "KT";
  		$kt = $char.sprintf("%03s",$nourut);
  		// echo $bb;exit();

  		$data = array(
  			'KODETARIF' => $kt,
  			'DAYA' => $daya,
  			'TARIFPERKWH' => $tarif
  			 );
  		$this->db->insert('tarif',$data);
  		redirect('admin/data_tarif');
  	}
  	function datail_tarif($id)
	{
		$data['halaman'] = 'admin/detail_data_tarif';
		$data['data'] = $this->admin_model->tampil_tarif_by_id($id);
		// $data['tarif'] = $this->admin_model->data_tarif();
		$this->load->view( $this->_template,$data);
	}
	function detail_pelanggan($id)
	{
		$data['halaman'] = 'admin/detail_data_pelanggan';
		$data['data'] = $this->admin_model->tampil_pelanggan_by_id($id);
		$data['tarif'] = $this->admin_model->data_tarif();
		$this->load->view( $this->_template,$data);
	}
	function update_petugas($id)
	{
		$data['halaman'] = 'admin/edit_data_petugas';
		$data['data'] = $this->admin_model->tampil_user_by_id($id);
		// $data['tarif'] = $this->admin_model->data_tarif();
		$this->load->view( $this->_template,$data);
	}
	function detail_petugas($id)
	{
		$data['halaman'] = 'admin/detail_data_petugas';
		$data['data'] = $this->admin_model->tampil_user_by_id($id);
		// $data['tarif'] = $this->admin_model->data_tarif();
		$this->load->view( $this->_template,$data);
	}
	function edit_petugas()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
  		$alamat = $this->input->post('alamat');
  		$jk = $this->input->post('jk');
  		$user =$this->input->post('user');
  		$pass =$this->input->post('pass');

  		$data = array(
  			'NAMA' => $nama,
  			'USERNAME' => $nama,
  			'PASSWORD' => $nama,
  			'ALAMAT' => $alamat,
  			'JENIS_KELAMIN' => $jk,
  			 );
		$this->db->where('IDUSER',$id);
		$this->db->update('user',$data);
		redirect('admin/data_petugas');
	}
	function filter_laporan()
	{
		$data['halaman'] = 'admin/filter_laporan';
		$data['bulan'] = $this->admin_model->tampil_bulan();
		// $data['tarif'] = $this->admin_model->data_tarif();
		$this->load->view( $this->_template,$data);
	}
	function edit_profil(){
  		$nama = $this->input->post('nama');
  		$jk = $this->input->post('jk');
  		$email = $this->input->post('email');
  		$alamat = $this->input->post('alamat');
  		$no_hp = $this->input->post('no_hp');
  		$id = $this->session->userdata('IDUSER');
  		// $query = " UPDATE SET NAMA='$nama',TANGGAL_LAHIR='tanggal',TEMPAT_LAHIR='tempat',JENIS_KELAMIN where ID_GURU ='$Guru' ";
  		// echo $query;exit();
  		if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
            //Check if the file is JPEG image and it's size is less than 350Kb
            $filename = basename($_FILES['uploaded_file']['name']);
            $ext = substr($filename, strrpos($filename, '.') + 1);
            if (($ext == "jpg") || ($ext == "png")) {
              //Determine the path to which we want to save this file
                date_default_timezone_set('Asia/Jakarta'); 
                $name = date('dmYhis');
                $newname = 'uploads/foto/'.$name.'.'.$ext;
                //echo $newname."  ".$nim; exit();
                //Check if the file with the same name is already exists on the server

                  //Attempt to move the uploaded file to it's new place
                  if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
			                  	$data = array(
						  			'NAMA' => $nama,
						  			'JENIS_KELAMIN' => $jk,
						  			'EMAIL' => $email,
						  			'ALAMAT' => $alamat,
						  			'NO_HP' => $no_hp,
						  			'FOTO' => $newname );
						  		$this->db->where('IDUSER',$this->session->userdata('IDUSER'));
						  		$this->db->update('user',$data);
						  		 redirect('admin/profile');
                  }
              }
          }else{
          	$data = array(
  			'NAMA' => $nama,
			'JENIS_KELAMIN' => $jk,
			'EMAIL' => $email,
			'ALAMAT' => $alamat,
			'NO_HP' => $no_hp, );
  		$this->db->where('IDUSER',$this->session->userdata('IDUSER'));
		$this->db->update('user',$data);
		redirect('admin/profile');
          }

  	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */