<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_model extends CI_Model {

	public function displayVideosList(){

		$query = $this->db->query('SELECT * FROM videos');
		return $query->result();
	}

	
}









?>