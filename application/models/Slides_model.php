<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slides_model extends CI_Model{
	
	public function getSlides(){
		$this->db->select("*");
		$this->db->from("slides");
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>