<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct()
{
	parent:: __construct();
	$this->load->model('login_model');
}

	function index()
	{
		$this->load->view('welcome_message');
	}

	function aksi_login()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		$cek = $this->login_model->cek_login($user,$pass);

		// echo $cek->NAMA;exit();

		if ($cek->LEVEL == 1) {
			$data_session = array(
				'NAMA' => $cek->NAMA,
				'IDUSER' => $cek->IDUSER,
				'LEVEL' => $cek->LEVEL
				 );
			$this->session->set_userdata($data_session);
			// redirect('admin');
			echo 1;
		}elseif ($cek->LEVEL == 2) {
			$data_session = array(
				'NAMA' => $cek->NAMA,
				'IDUSER' => $cek->IDUSER,
				'LEVEL' => $cek->LEVEL
				 );
			$this->session->set_userdata($data_session);
			// redirect('petugas');
			echo 2;
		}elseif($cek->LEVEL == 3){
			$data_session = array(
				'NAMA' => $cek->NAMA,
				'IDUSER' => $cek->IDPELANGGAN,
				'LEVEL' => $cek->LEVEL
				 );
			$this->session->set_userdata($data_session);
			// redirect('pengguna');
			echo 3;
		}else{
			// redirect('welcome');
			echo 0;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */