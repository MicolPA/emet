videos/<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Admin_model');
	}	


	public function index()
	{	
		$data['view'] = 'admin/home';
		$data['title'] = 'Inicio';

		$this->load->view('admin/template', $data);
	}

	public function videos(){

		$data['view'] = 'admin/videos/home';
		$data['title'] = 'videos';

		$this->load->view('admin/template', $data);
	}
	public function nuevo_video(){

		$data['view'] = 'admin/videos/nuevo';
		$data['title'] = 'videos';

		$this->load->view('admin/template', $data);
	}

}
