<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Update_model extends CI_model{

    public function __construct(){

        $this->load->database();

    }


    public function update_gamer($id,$data){
        $this->db->where('id',$id);
        return $this->db->update('gamer',$data);
    }
}