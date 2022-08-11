<?php

class Import_Model extends CI_Model{
    function insert($data){
        $this->db->insert_batch('all_provider_data', $data);  
    }
}