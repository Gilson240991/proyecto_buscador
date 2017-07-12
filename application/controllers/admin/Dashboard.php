<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		 parent::__construct();
	}
	public function index()
	{
		$data['titulo']="Perfil del Usuario";
		$data['persona']=$this->usu->listarDatosPersona($this->session->userdata('usuario'));
		$this->load->view('admin/guest/header',$data);
		$this->load->view('admin/guest/nav');
		$this->load->view('admin/dashboard/dashboard');
		$this->load->view('admin/guest/footer');


		
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */
