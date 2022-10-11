<?php

class User_model extends CI_model{
   
    public function loginuser($email){
        return $this->db->where('email',$email)->get('gamer')->row();
    }
}