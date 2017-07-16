<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		 parent::__construct();
	}
	public function index()
	{
		if(empty($this->session->usuario)){
			redirect('login','refresh');
		}
		$data['titulo']="Dashboard";
		$data['persona']=$this->usu->listarDatosPersona($this->session->userdata('usuario'));
		$data['tipo']=$this->usu->listarTipoUsuario($this->session->userdata('usuario'));
		$this->load->view('admin/guest/header',$data);
		$this->load->view('admin/guest/aside');
		$this->load->view('dashboard');
		$this->load->view('admin/guest/footer');



	}

}
