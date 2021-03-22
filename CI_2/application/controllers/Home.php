<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Home extends CI_Controller {
  
    public function index($name = '')
    {
      $data['name'] = $name;
      $this->load->view('template/header');
      $this->load->view('home/index');
      $this->load->view('template/footer');
    }
  
    public function belajar(){
      $this->load->view('template/header');
      $this->load->view('home/index');
      $this->load->view('template/footer');
    }

    public function belajar_kedua(){
      $this->load->view('template/header');
      $data ['names'] = array(
        "Andi bagus",
        "Dewi ayu",
        "Dika Saputra",
        "Agung pamudji"
      );
      $this->load->view('home/index');
      $this->load->view('template/footer');
    }

  }
  
  /* End of file Home.php */
  
?>