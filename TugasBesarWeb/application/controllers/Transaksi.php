<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

require APPPATH . '/libraries/Format.php';

class Transaksi extends REST_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model');
    }

    public function index_get(){
        
        //menampilkan dari id
        $id_transaksi = $this->get('id_transaksi');
        if($id_transaksi == null){
            $transaksi = $this->Transaksi_model->getTransaksi();
        }else{
            $transaksi = $this->Transaksi_model->getTransById($id_transaksi);
        }


        if($transaksi){
            $this->response($transaksi,REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }
        
    }

    public function index_delete(){
        $id_transaksi = $this->delete('id_transaksi');

        if($id_transaksi === null){
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->Transaksi_model->deleteTransaksi($id_transaksi) > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'id_transaksi' => $id_transaksi,
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
            'id_barang' => $this ->post('id_barang'),
            'jumlah' => $this ->post('jumlah'),
            'harga' => $this ->post('harga'),
            'harga_total' => $this ->post('harga_total'),
            'bayar' => $this ->post('bayar'),
            'kembalian' => $this ->post('kembalian'),
            'tanggal' => $this ->post('tanggal'),
        ];

        if($this->Transaksi_model->createTransaksi($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'new Transaksi created'
            ],REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to create data'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $id_transaksi =$this->put('id_transaksi');
        $data =[
            'id_barang' => $this ->put('id_barang'),
            'jumlah' => $this ->put('jumlah'),
            'harga' => $this ->put('harga'),
            'harga_total' => $this ->put('harga_total'),
            'bayar' => $this ->put('bayar'),
            'kembalian' => $this ->put('kembalian'),
            'tanggal' => $this ->put('tanggal'),
        ];

        if($this->Transaksi_model->updateTransaksi($data, $id_transaksi) > 0){
            $this->response([
                'status' => true,
                'message' => 'Transaksi has been updated'
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to update data'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    

}