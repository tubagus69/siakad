<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Petugas extends CI_Controller {

private $_template = "menu_petugas";

function __construct()
{
	parent:: __construct();
	if(!$this->session->userdata("NAMA")):
         redirect('welcome');
    endif;
	$this->load->model('petugas_model');
}

	function index()
	{
		$data['halaman'] = 'petugas/home';
		$this->load->view( $this->_template,$data);
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
	function data_pelanggan()
	{
		$data['halaman'] = 'petugas/data_pelanggan';
		$data['data'] = $this->petugas_model->tampil_pelanggan();
		$this->load->view( $this->_template,$data);
	}
	function update_pelanggan($id)
	{
		$data['halaman'] = 'petugas/edit_data_pelanggan';
		$data['data'] = $this->petugas_model->tampil_pelanggan_by_id($id);
		$data['tarif'] = $this->petugas_model->data_tarif();
		$this->load->view( $this->_template,$data);
	}
	function edit_pelanggan()
	{
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');

		$data = array(
			'KODETARIF' =>$kode 
			 );
		$this->db->where('IDPELANGGAN',$id);
		$this->db->update('pelanggan',$data);
		redirect('petugas/data_pelanggan');
	}
	function data_penggunaan()
	{
		$data['halaman'] = 'petugas/data_penggunaan';
		$data['data'] = $this->petugas_model->tampil_penggunaan();
		$this->load->view( $this->_template,$data);
	}
	function insert_penggunaan()
	{
		$data['halaman'] = 'petugas/tambah_penggunaan';
		$data['bulan'] = $this->petugas_model->data_bulan();
		$data['pelanggan'] = $this->petugas_model->tampil_pelanggan();
		$this->load->view( $this->_template,$data);
	}
	function tambah_penggunaan()
	{
		$idpelanggan = $this->input->post('idpelanggan');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$awal = $this->input->post('awal');
		$akhir = $this->input->post('akhir');
		$tot = $akhir-$awal;
		// echo $tot;exit();

		$cek = $this->petugas_model->cek_penggunaan($idpelanggan,$bulan,$tahun);

		if ($cek) {
			// echo "ada";exit();
			$this->session->set_flashdata('data_penggunaan','Data Sudah Ada');
			redirect('petugas/data_penggunaan');
		}else{
			// echo "kosong";exit();
			$data = array(
				'IDPELANGGAN' =>$idpelanggan,
				'BULAN' =>$bulan,
				'TAHUN' =>$tahun,
				'METERAWAL' =>$awal,
				'METERAKHIR' =>$akhir
				 );
			$this->db->insert('penggunaan',$data);

			$data1 = array(
				'IDPELANGGAN' =>$idpelanggan,
				'BULAN' =>$bulan,
				'TAHUN' =>$tahun,
				'JUMLAHMETER' => $tot
				 );
			$this->db->insert('tagihan',$data1);

			$this->session->set_flashdata('data_penggunaan','Data Berhasil di Tambahkan');
			redirect('petugas/data_penggunaan');
		}
	}

	function data_laporan()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		if ($bulan == 0 && $tahun == 0) {
			$data['data'] = $this->petugas_model->tampil_laporan();
		}elseif ($bulan > 0 && $tahun == 0) {
			$data['data'] = $this->petugas_model->tampil_laporan_alltahun($bulan);
		}elseif ($bulan == 0 && $tahun > 0) {
			$data['data'] = $this->petugas_model->tampil_laporan_allbulan($tahun);
		}else{
			$data['data'] = $this->petugas_model->tampil_laporan_by_tahun_bulan($bulan,$tahun);
		}

		$data['halaman'] = 'petugas/data_laporan';
		// $data['data'] = $this->petugas_model->tampil_laporan();
		$this->load->view( $this->_template,$data);
	}
	function cetak_laporan()
	{
		$data['data'] = $this->petugas_model->cetak_laporan();
		$this->load->view( 'petugas/cetak_laporan',$data);
	}
	function filter_laporan()
	{
		$data['halaman'] = 'petugas/filter_laporan';
		$data['bulan'] = $this->petugas_model->data_bulan();
		// $data['tarif'] = $this->admin_model->data_tarif();
		$this->load->view( $this->_template,$data);
	}
	function profile()
	{
		$data['halaman'] = 'petugas/profile';
		$data['data'] = $this->petugas_model->data_profile();
		$this->load->view($this->_template,$data);
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
						  		 redirect('petugas/profile');
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
		redirect('petugas/profile');
          }

  	}
  	function tagihan_pelanggan()
	{
		$data['halaman'] = 'petugas/data_tagihan';
		$data['data'] = $this->petugas_model->tampil_tagihan_by_id();
		$this->load->view($this->_template,$data);
	}
	function bayar_tagihan($idtagihan,$idpelanggan)
	{
		$data['halaman'] = 'petugas/bayar_tagihan';
		$data['idpelanggan'] = $idpelanggan;
		$data['idtagihan'] = $idtagihan;
		$data['tagihan'] = $this->petugas_model->data_tagihan($idpelanggan);
		$data['pelanggan'] = $this->petugas_model->data_pelanggan($idpelanggan);
		$data['admin'] = $this->petugas_model->data_biaya_admin();
		$this->load->view($this->_template,$data);
	}
	function insert_bayar_tagihan()
	{

		$idpelanggan = $this->input->post('idpelanggan');
		$idtagihan = $this->input->post('idtagihan');
		$tanggal = date('Y-m-d');
		$bulan = $this->input->post('bulan');
		$admin = $this->input->post('admin');

		if ($this->input->post('bayar') >= $this->input->post('total') || $this->input->post('bayar') == $this->input->post('total')) {
				$data = array(
	  			'IDPELANGGAN' => $idpelanggan,
				'TANGGAL' => $tanggal,
				'BULANBAYAR' => $bulan,
				'BIAYAADMIN' => $admin );
			$this->db->insert('pembayaran',$data);

			$data1 = array(
	  			'STATUS' => 1 
	  		);
			$this->db->where('IDTAGIHAN',$idtagihan);
			$this->db->where('IDPELANGGAN',$idpelanggan);
			$this->db->update('tagihan',$data1);
			redirect('petugas/tagihan_pelanggan');
		}else{
			redirect('petugas/bayar_tagihan/'.$idtagihan.'/'.$idpelanggan);
		}

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */