<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

require APPPATH . '/libraries/Format.php';

class Kategori extends REST_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
    }

    public function index_get(){
        
        //menampilkan dari id
        $id_kategori = $this->get('id_kategori');
        if($id_kategori === null){
            $kategori = $this->Kategori_model->getKategori();
        }else{
            $kategori = $this->Kategori_model->getKategori($id_kategori);
        }


        if($kategori){
            $this->response($kategori,REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
        
    }

    public function index_delete(){
        $id_kategori = $this->delete('id_kategori');

        if($id_kategori === null){
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->Kategori_model->deleteKategori($id_kategori) > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'id_kategori' => $id_kategori,
                    'message' => 'deleted.'
                ],REST_Controller::HTTP_OK);
            }else{
                //id not found
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ],REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data =[
            'nama_kategori' => $this ->post('nama_kategori'),
        ];

        if($this->Kategori_model->createKategori($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'new kategori created'
            ],REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to create data'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $id_kategori =$this->put('id_kategori');
        $data =[
            'nama_kategori' => $this ->put('nama_kategori'),
        ];

        if($this->Kategori_model->updateKategori($data, $id_kategori) > 0){
            $this->response([
                'status' => true,
                'message' => 'Kategori has been updated'
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to update data'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    

}