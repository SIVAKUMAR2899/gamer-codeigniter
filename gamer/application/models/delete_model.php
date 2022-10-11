<?php

class Delete_model extends CI_model{
    
    function delete ($id){
        return $this->db->delete('gamer',['id' => $id]);
        
    }
}