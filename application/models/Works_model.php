<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works_model extends CI_Model{
	
	public function getWorks(){
		$this->db->select("*");
		$this->db->from("works");
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>