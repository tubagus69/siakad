<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

public function __construct()
    {
        parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_default');
		$this->load->model('m_kalender');
		date_default_timezone_set('Asia/Jakarta');
                
    }
public function index()
	{		
		if($this->session->userdata('login')==True){
		$cek_sekolah=$this->m_default->get_data('tblsekolah');
		if($cek_sekolah->num_rows()>0){
			$data['judul']="Dashboard";
			$data['active1']='active';
			$data['konten']="home";
			$data['sekolah']=$this->m_default->get_data('tblsekolah')->row_array();
			$where=array('status_kurikulum'=>'1');
			$data['kurikulum']=$this->m_default->get_data_detail($where,'tblkurikulum')->row_array();
		}
		else{
			$data['judul']="Data Sekolah";
			$data['active7']='active';
			$data['konten']="data_sekolah";

		}
		$this->load->view('template',$data);	
		}
		else{
			redirect('user/login');
		}
		
	}
public function login()
	{
		$this->load->view('login');
	}
public function logout()
	{
		$this->session->sess_destroy();
		if($this->session->userdata('tipe')=='admin'){
			redirect(base_url('index.php/user/login_admin'));	
		}
		else{
		redirect(base_url('index.php/user/login'));	
		}
		
	}

public function proses_login()
	{
		$this->form_validation->set_rules('nip_nis', 'NIP', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$tipe=$this->input->post('tipe');
		if($tipe=='guru'){
			$tbl=$this->m_user->get_loginguru('tblguru');
		}
		else{
			$tbl=$this->m_user->get_loginsiswa('tblsiswa');
		}
		if ($this->form_validation->run() == TRUE) {
			if($tbl->num_rows()>0){
				$data=$tbl->row();
				if($tipe=='guru'){
					$array = array(
					'login' => TRUE,
					'id_guru' => $data->id_guru,
					'tipe'=>'guru'
				);
				}
				else{
					$array = array(
					'login' => TRUE,
					'id_siswa' => $data->id_siswa,
					'id_kelas' => $data->id_kelas,
					'semester' => $data->semester,
					'tipe'=>'siswa'
				);
				}
				$this->session->set_userdata($array);
				redirect('user','refresh');
			}
			else {
				if($tipe=='guru'){
				echo '<script>alert("NIP atau password salah")</script>';
				redirect('user/login','refresh');	
				}
				else{
					echo '<script>alert("NIS atau password salah")</script>';
				redirect('user/login','refresh');
				}
				
			}

		}
		else {
			$this->form_validation->set_error_delimiters('', '');
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('user/login','refresh');
		}
	}
public function login_admin()
	{
		$this->load->view('login');
	}
public function proses_loginadmin()
	{
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			if($this->m_user->get_loginadmin('tbladmin')->num_rows()>0){
				$data=$this->m_user->get_loginadmin('tbladmin')->row();
				$array = array(
					'login' => TRUE,
					'id_admin' => $data->id_admin,
					'nip' => $data->nip,
					'nama_admin' => $data->nama_admin,
					'password'=>$data->password,
					'foto'=>$data->foto,
					'tipe'=>'admin'
				);
				$this->session->set_userdata($array);
				redirect('user/','refresh');
			}
			else {
				echo '<script>alert("NIP atau password salah")</script>';
				redirect('user/login_admin','refresh');
			}

		}
		else {
			$this->form_validation->set_error_delimiters('', '');
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('user/login_admin','refresh');
		}
	}

}


/* End of file user.php */
/* Location: ./application/controllers/user.php */
?>