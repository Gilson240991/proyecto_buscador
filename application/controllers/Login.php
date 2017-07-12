<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data =  array('titulo' =>'Iniciar sesion' );
		$this->load->view('admin/login/login',$data);
	}

	public function acceder()

	{

		$this->load->model('usuario_model','usu');

		$data=$this->input->post();
		$usuario =$data['usuario'];
		$clave =$data['clave'];
		$estado = $this->usu->validar($usuario,md5($clave));
		$usuario_data['usuario']=$usuario;
		$usuario_data['login']=true;

		if($estado){
			$this->session->set_userdata($usuario_data);
		}
		echo $estado;


	}

}
