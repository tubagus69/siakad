<?
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller{

	public function index()
{
$this->load->view('welcome_message');
}

public function belajar(){
	$this->load->view('belajar.php');
}

public function belajar(){
	$this->load->view('belajar_dua.php');
}
}