<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Insert_model extends CI_Model{
    public function insert($values){
        $this->db->insert('product', $values);
    }
	
    public function get_suppliers(){
        $query = $this->db->query("SELECT * FROM supplier");
        return $query->result_array();
    }
	
    public function get_categories(){
        $query = $this->db->query("SELECT * FROM category");
        return $query->result_array();
    }
}
