<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Gamercontroller extends RestController {

    public function __construct()
    {
       parent::__construct();
       $this->load->database();
       $this->load->model('Gamermodel');
    }
    
    // Get method

    public function index_GET(){
        $gamer = new Gamermodel;
        $result = $gamer->get_gamer();
        $this->response($result,200);
    }
     
    // add method

    public function addgamer_POST(){
        $gamer = new GamerModel;
        $data = [
        'id'=> $this->input->POST('id'),
        'firstname' => $this->input->POST('firstname'),
		'lastname' => $this->input->POST("lastname"),
		'age' => $this->input->POST("age"),
		'gender' => $this->input->POST("gender"),
		'contact' => $this->input->POST("contact"),
		'email' => $this->input->POST("email"),
		'password' => md5($this->input->POST("password"))
        ];

        $add_result =  $gamer->insert_gamer($data);

        if($add_result == true)
        {
            $this->response([
                'status' => true,
                'message'=>'Gamer added successfully'
            ],RestController::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message'=>'Gamer added failed'
            ],RestController::HTTP_BAD_REQUEST);
        }
    }
    
    // get by id method

    public function findgamer_get($id){
        $gamer = new Gamermodel;
        $result = $gamer->edit_gamer($id);
        $this->response($result,200);
    }
    
    // update method

    public function updategamer_POST($id){
        $gamer = new GamerModel;
        $data = [
        'firstname' => $this->input->POST('firstname'),
		'lastname' => $this->input->POST("lastname"),
		'age' => $this->input->POST("age"),
		'gender' => $this->input->POST("gender"),
		'contact' => $this->input->POST("contact"),
		'email' => $this->input->POST("email")
        ];

        $update_result = $gamer->update_gamer($id,$data);

        if($update_result == true)
        {
            // echo"hi";
            $this->response([
                'status' => true,
                'message'=>'Gamer updated successfully'
            ],RestController::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message'=>'Gamer updated failed'
            ],RestController::HTTP_BAD_REQUEST);
        }
    }
    
    // delete method

    public function deletegamer_delete($id){
        // $gamer = new GamerModel;
        $this->load->model('GamerModel');
        $delete_result = $this->GamerModel->delete($id);
        if($delete_result == true)
        {
            $this->response([
                'status' => true,
                'message'=>'Gamer deleted successfully'
            ],RestController::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message'=>'Gamer deleted failed'
            ],RestController::HTTP_BAD_REQUEST);
        }
    }
}


?>