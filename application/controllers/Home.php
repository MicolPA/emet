<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){

		parent::__construct();
	}	


	public function index()
	{	
		//$data['view'] = 'home/home';
		$data['title'] = 'Inicio';

		$this->load->view('home/home');
	}

	public function lesson()
	{	
		$data['view'] = 'home/lesson';
		$data['title'] = 'Lección';

		$this->load->view('home/template', $data);
	}
}
