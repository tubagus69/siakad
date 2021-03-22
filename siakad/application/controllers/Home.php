<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {
public function __construct()
    {
        parent::__construct();
		$this->load->model('m_default');
		$this->load->model('m_home');
		date_default_timezone_set('Asia/Jakarta');
                
    }
public function index(){
	if($this->m_default->get_data('tblsekolah')->num_rows()==0){
	redirect('user/login_admin');
	}
	else{
	$data['sekolah']=$this->m_default->get_data('tblsekolah')->row_array();
	$data['konten']='front/v_home';
	$this->load->view('front/v_template',$data);	
	}
}
public function about(){
	$data['sekolah']=$this->m_default->get_data('tblsekolah')->row_array();
	$data['konten']='front/v_about';
	$this->load->view('front/v_template',$data);
}
public function guru(){
	$data['sekolah']=$this->m_default->get_data('tblsekolah')->row_array();
	$data['guru']=$this->m_default->get_data('tblguru');
	$data['konten']='front/v_guru';
	$this->load->view('front/v_template',$data);
}
public function siswa(){
	$data['sekolah']=$this->m_default->get_data('tblsekolah')->row_array();
	$data['siswa']=$this->m_home->get_siswahome();
	$data['konten']='front/v_siswa';
	$this->load->view('front/v_template',$data);
}
public function galeri()
{
	$data['sekolah']=$this->m_default->get_data('tblsekolah')->row_array();
	$data['galeri']=$this->m_default->get_data('tblgaleri');
	$data['konten']='front/v_galeri';
	$this->load->view('front/v_template',$data);	
}
}