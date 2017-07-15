<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

  public function index(){
    $data['titulo']="Administracion de Usuario";
    $data['persona']=$this->usu->listarDatosPersona($this->session->userdata('usuario'));
    $this->load->view('guest/header',$data);
    //$this->load->view('admin/guest/nav');
		$this->load->view('admin/usuario/usuario');
    //$this->load->view('admin/guest/footer');
  }
  public function mostrar(){
    $buscar = $this->input->post("buscar");
    $numeropagina=$this->input->post("nropagina");
    $cantidad=5;
    $inicio =($numeropagina -1)*$cantidad;
    $data = array("personas"=>$this->usu->buscar($buscar,$inicio,$cantidad),
    "totalregistros"=>count($this->usu->buscar($buscar)),
    "cantidad"=>$cantidad);
    echo json_encode($data);
  }

  public function listarInformacionPersona(){
    $id = $this->input->post('id');
    $info['personas']=$this->usu->listarDatosPersonaPorID($id);
    $info['parametro']=$this->usu->listarParametro(1);
		$info['cargo']=$this->usu->listarCargo();
    echo json_encode($info);
  }

	public function update(){
		//id de persona y usuario respectivamente
		$id = $this->input->post('id');
		$idusuario=$this->input->post('idusuario');

		//datos a modificar de personay usuario
		$persona= array("Dni"=>$this->input->post('Dni'),
										"Nombre"=>$this->input->post('Nombre'),
										"Paterno"=>$this->input->post('Paterno'),
										"Materno"=>$this->input->post('Materno'),
										"Direccion"=>$this->input->post('Direccion'),
										"Celular"=>$this->input->post('Celular'),
										"Correo"=>$this->input->post('Correo'));

	  $usuario =array("IDent_001_Estado"=> $this->input->post('Estado'),
									"IDent_Tipo"=>$this->input->post('Cargo'));

		//funciones de actualizacion de cada uno
		$estado=$this->usu->updatePersona($id,$persona);
		$flag = $this->usu->updateUsuario($idusuario,$usuario);

		if($estado){
			if($flag){
				$valor=true;
			}else{
				$valor=false;
			}

		}else{
			$valor = false;
		}

		$json['estado']=$estado;
		echo json_encode($json);
	}

	public function insert(){
		$persona= array("Dni"=>$this->input->post('Dni'),
										"Nombre"=>$this->input->post('Nombre'),
										"Paterno"=>$this->input->post('Paterno'),
										"Materno"=>$this->input->post('Materno'),
										"Direccion"=>$this->input->post('Direccion'),
										"Celular"=>$this->input->post('Celular'),
										"Correo"=>$this->input->post('Correo'));

//retorna el id de la persona insertada
		$id =$this->usu->insertPersona($persona);

//datos para el usuario
		$clave =strtolower(substr($this->input->post('Nombre'),0,2)."".substr($this->input->post('Paterno'),0,2)."".substr($this->input->post('Materno'),0,2));
		$usuario =array("usuario"=>$this->input->post('Dni'),
										"clave"=>md5($clave),
										"IDent_Persona"=>$id);

		if($this->usu->insertUsuario($usuario)){
			$estado = true;
		}else {
			$estado = false;
		}

		$json['estado']=$estado;
		echo json_encode($json);

	}

public function deletepersona(){
	$id = $this->input->post('id');
	if($this->usu->delete($id)){
		$estado = true;
	}else{
		$estado = false;
	}
		$json['estado']=$estado;
		echo json_encode($json);
}

public function htmlcambiarclave(){
$data['titulo']="Cambiar clave";
$data['persona']=$this->usu->listAllPersonas();

$this->load->view('guest/header',$data);
$this->load->view('admin/usuario/htmlcambiarclave');
}
public function listarUsuario(){
	$id = $this->input->post('id');

	$datos['usuario']=$this->usu->listarDatosPersonaPorID($id);
	echo json_encode($datos);
}

public function actualizarusuario(){
	$id= $this->input->post('id');

	$usuario=array("clave"=>md5($this->input->post('nuevopass')),
								 "usuario"=>$this->input->post('usuario'));
	if($this->usu->updateusuariodatos($usuario,$id)){
		$estado = true;
	}else{
		$estado =false;
	}
	$json['estado']=$estado;
	echo json_encode($json);
}
}
