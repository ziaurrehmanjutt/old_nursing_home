<?php

class Home_Model extends CI_Model{
    function search_data($text,$zip,$page){
        $this->db->select('*');  
        $this->db->from('all_provider_data'); 
        if($text)
        $this->db->like('provider_name', $text);
        if($zip)
        $this->db->like('provider_zip', $zip);
        $this->db->limit(9,($page-1)*9);
        return $this->db->get()->result_array();
        // $this->db->insert_batch('all_provider_data', $data);  
    }

    function get_total_count($text,$zip){
        $this->db->select('COUNT(*) as count');  
        $this->db->from('all_provider_data'); 
        if($text)
        $this->db->like('provider_name', $text);
        if($zip)
        $this->db->like('provider_zip', $zip);
        return $this->db->get()->row()->count;
    }

    function get_detail($id){
        $this->db->select('*');  
        $this->db->from('all_provider_data'); 
        $this->db->where('rowid',$id); 
        return $this->db->get()->row();
        // $this->db->insert_batch('all_provider_data', $data);  
    }

    function get_vaccination($id){
        $this->db->select('covid_vaccination_rates.*');  
        $this->db->from('all_provider_data,covid_vaccination_rates'); 
        $this->db->where('all_provider_data.rowid',$id); 
        $this->db->where('covid_vaccination_rates.fedral_provider_number = federal_provider_number'); 
        return $this->db->get()->row();
        // $this->db->insert_batch('all_provider_data', $data);  
    }

}