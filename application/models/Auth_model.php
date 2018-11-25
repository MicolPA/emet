<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Auth_model extends CI_Model {

	public function __construct(){

		parent::__construct();
	}

	public function login ($email, $password){

		$this->db->where('email', $email);
		$this->db->where('password', $password);

		$verification = $this->db->get('user');

		if ($verification->num_rows() > 0) {
			
			return true;
	
		} else{
			return false;
		}
	}
}









?>