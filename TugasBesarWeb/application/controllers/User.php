<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

require APPPATH . '/libraries/Format.php';

class User extends REST_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index_get(){
        
        //menampilkan dari id
        $id_login = $this->get('id_login');
        if($id_login === null){
            $login = $this->User_model->getLogin();
        }else{
            $login = $this->User_model->getLogin($id_login);
        }


        if($login){
            $this->response($login,REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ],REST_Controller::HTTP_NOT_FOUND);
        }        
    }

    public function index_delete(){
        $id_login = $this->delete('id_login');

        if($id_login === null){
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->User_model->deleteUser($id_login) > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'id_login' => $id_login,
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
            'nama' => $this ->post('nama'),
            'username' => $this ->post('username'),
            'password' => $this ->post('password'),
            'level' => $this ->post('level'),
            'status' => $this ->post('status'),
        ];

        if($this->User_model->createUser($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'new User created'
            ],REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to create data'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    public function index_put(){
        $id_login =$this->put('id_login');
        $data =[
            'nama' => $this ->put('nama'),
            'username' => $this ->put('username'),
            'password' => $this ->put('password'),
            'level' => $this ->put('level'),
            'status' => $this ->put('status'),
        ];

        if($this->User_model->updateUser($data, $id_login) > 0){
            $this->response([
                'status' => true,
                'message' => 'User has been updated'
            ],REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to update data'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function login_post()
    {
        $uname = $this->post('username');
        $pass = $this->post('password');
        $login = $this->User_model->login($uname, $pass);
        if ($login) {
            $this->response($login,REST_Controller::HTTP_OK);
        }
    }
    

}
