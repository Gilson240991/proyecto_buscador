<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recurso extends CI_Controller {
	public function __construct(){
		 parent::__construct();
	}
	public function index()
	{
		$this->load->view('guest/header');
		$this->load->view('admin/recurso/buscarrecurso');
	}

	public function htmlcrearrecurso(){
		$this->load->view('guest/header');
		$this->load->view('admin/recurso/crearrecurso');

	}

}
