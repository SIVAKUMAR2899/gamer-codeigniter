<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add_model extends CI_model{
    function insert ($data){
        $this->db->insert('gamer',$data);
        return true;
    }
}