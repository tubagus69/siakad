<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

require APPPATH . '/libraries/Format.php';

class Barang extends REST_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    //menampilkan barang
    public function index_get(){
        
        //menampilkan dari id
        $id_barang = $this->get('id_barang');
        if($id_barang === null){
            $barang = $this->Barang_model->getBarang();
        }else{
            $barang = $this->Barang_model->getBarang($id_barang);
        }


        if($barang){
            $this->response($barang,REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
        
    }

    //menghapus data
    public function index_delete(){
        $id_barang = $this->delete('id_barang');

        if($id_barang === null){
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->Barang_model->deleteBarang($id_barang) > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'id_barang' => $id_barang,
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
            'id_kategori' => $this ->post('id_kategori'),
            'nama_barang' => $this ->post('nama_barang'),
            'stok' => $this ->post('stok'),
            'harga' => $this ->post('harga'),
        ];

        if($this->Barang_model->createBarang($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'new barang created'
            ],REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to create data'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function index_put(){
        $id_barang =$this->put('id_barang');
        $data =[
            'id_kategori' => $this ->put('id_kategori'),
            'nama_barang' => $this ->put('nama_barang'),
            'stok' => $this ->put('stok'),
            'harga' => $this ->put('harga'),
        ];

        if($this->Barang_model->updateBarang($data, $id_barang) > 0){
            $this->response([
                'status' => true,
                'message' => 'Barang has been updated'
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to update data'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
    }

}