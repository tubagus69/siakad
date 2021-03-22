<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengguna extends CI_Controller {

private $_template = "menu_pengguna";

function __construct()
{
	parent:: __construct();
	if(!$this->session->userdata("NAMA")):
         redirect('welcome');
    endif;
	$this->load->model('pengguna_model');
}

	function index()
	{
		$data['halaman'] = 'pengguna/home';
		$this->load->view($this->_template,$data);
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
	function data_tagihan()
	{
		$data['halaman'] = 'pengguna/data_tagihan';
		$data['data'] = $this->pengguna_model->tampil_tagihan_by_id();
		$this->load->view($this->_template,$data);
	}
	function data_laporan()
	{
		$data['halaman'] = 'pengguna/data_laporan';
		$data['data'] = $this->pengguna_model->tampil_laporan();
		$this->load->view( $this->_template,$data);
	}
	function bayar_tagihan($idtagihan)
	{
		$data['halaman'] = 'pengguna/bayar_tagihan';
		$data['idtagihan'] = $idtagihan;
		$data['tagihan'] = $this->pengguna_model->data_tagihan();
		$data['pelanggan'] = $this->pengguna_model->data_pelanggan();
		$data['admin'] = $this->pengguna_model->data_biaya_admin();
		$this->load->view($this->_template,$data);
	}
	function insert_bayar_tagihan()
	{

		$idpelanggan = $this->session->userdata('IDUSER');
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
			redirect('pengguna/data_laporan');
		}else{
			redirect('pengguna/bayar_tagihan/'.$idtagihan);
		}

	}
	function profile()
	{
		$data['halaman'] = 'Pengguna/profile';
		$data['data'] = $this->pengguna_model->data_pelangganbyid();
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
						  		$this->db->where('IDPELANGGAN',$this->session->userdata('IDUSER'));
						  		$this->db->update('pelanggan',$data);
						  		 redirect('pengguna/profile');
                  }
              }
          }else{
          	$data = array(
  			'NAMA' => $nama,
			'JENIS_KELAMIN' => $jk,
			'EMAIL' => $email,
			'ALAMAT' => $alamat,
			'NO_HP' => $no_hp, );
  		$this->db->where('IDPELANGGAN',$this->session->userdata('IDUSER'));
		$this->db->update('pelanggan',$data);
		redirect('pengguna/profile');
          }

  	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */