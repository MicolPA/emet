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

	public function songs(){

		$data['view'] = 'home/songs';
		$data['title'] = 'Canciones';

		$this->load->view('home/template', $data);
	}

	public function profile()
	{	
		$data['view'] = 'home/profile';
		$data['title'] = 'Mi perfil';

		$this->load->view('home/template', $data);
	}
}
