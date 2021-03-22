<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function percobaan (){
		echo "ini adalah function percobaan";
	}

	public function belajar(){
		$this->load->view('belajar.php');
	}

	public function belajar_dua(){
		$this->load->view('belajar_dua.php');
	}
}
