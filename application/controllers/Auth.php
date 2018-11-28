<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Auth extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->library('session');
		$this->session->creatingProfile = 'hola';
	}	

	public function register(){

		$data['view'] = 'auth/register-profile';
		$this->load->view('home/template', $data);
		
	}
}


?>