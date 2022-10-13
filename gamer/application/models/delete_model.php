<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_model extends CI_model{
    
    public function delete($id){
        return $this->db->delete('gamer',['id' => $id]);
        
    }
}