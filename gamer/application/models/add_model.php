<?php

class Add_model extends CI_model{
    function insert ($data){
        $this->db->insert('gamer',$data);
        return true;
    }
}