<?php

class Update_model extends CI_model{
    function update ($id,$data){
        return $this->db->update('gamer',$data,['id' => $id]);
        
    }
    // public function update_gamer($id,$data){
    //     $this->db->where('id',$id);
    //     return $this->db->update('gamer',$data);
    // }
}