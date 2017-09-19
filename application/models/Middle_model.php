<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Middle_model extends CI_Model{
	
	public function getMiddleMenu(){
		$this->db->select("*");
		$this->db->from("middle");
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>