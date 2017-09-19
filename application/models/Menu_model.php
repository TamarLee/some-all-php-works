<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model{
	
	public function getMenu(){
		$this->db->select("*");
		$this->db->from("menu");
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>