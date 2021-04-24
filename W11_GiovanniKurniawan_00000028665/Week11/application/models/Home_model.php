<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_model extends CI_Model{
	function get_product(){
		$query = $this->db->query("SELECT * FROM product");

		return $query->result_array();
	}
}
?>