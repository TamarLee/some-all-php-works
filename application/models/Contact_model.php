<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model{
	
	public function getContact(){
		$this->db->select("*");
		$this->db->from("inputs");
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>