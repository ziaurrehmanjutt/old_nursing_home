<?php

class Home_Model extends CI_Model{
    function search_data($text,$zip){
        $this->db->select('*');  
        $this->db->from('all_provider_data'); 
        if($text)
        $this->db->like('provider_name', $text);
        if($zip)
        $this->db->like('provider_zip', $zip);
        $this->db->limit(10);
        return $this->db->get()->result_array();
        // $this->db->insert_batch('all_provider_data', $data);  
    }

    function get_detail($id){
        $this->db->select('*');  
        $this->db->from('all_provider_data'); 
        $this->db->where('rowid',$id); 
        return $this->db->get()->row();
        // $this->db->insert_batch('all_provider_data', $data);  
    }
}