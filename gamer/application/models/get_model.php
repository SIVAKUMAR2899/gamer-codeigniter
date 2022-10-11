<?php

class Get_model extends CI_model{
   function users_page()
   {
    $query = $this->db->query("SELECT * FROM gamer");
    if($query->num_rows()>0){
        return $query->result();
    }else{
        return NULL;
    }
   }
}