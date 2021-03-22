<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index($tugas='Agung Pamudji')
    {
        $data ['title'] = 'Home';
        //$data adalah sebuah array dengan isi arraynya adalah name dan diisi $name
        $data ['tugas']= $tugas;
        $this->load->view('template/header',$data);
      //  echo"Selamat Datang di Halaman Home";
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */

?>