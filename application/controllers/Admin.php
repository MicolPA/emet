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
		$data['title'] = 'Videos';

		$this->load->view('admin/template', $data);
	}
	public function new_video(){

		$data['view'] = 'admin/videos/nuevo';
		$data['title'] = 'Nuevo video';

		$this->load->view('admin/template', $data);
	}

	public function songs(){

		$data['view'] = 'admin/songs/home';
		$data['title'] = 'Canciones';

		$this->load->view('admin/template', $data);
	}

	public function user(){

		$data['view'] = 'admin/user/home';
		$data['title'] = 'Usuarios';

		$this->load->view('admin/template', $data);
	}

	public function user_detail(){
		$data['view'] = 'admin/user/detail';
		$data['title'] = 'Usuarios';

		$this->load->view('admin/template', $data);

	}

}
