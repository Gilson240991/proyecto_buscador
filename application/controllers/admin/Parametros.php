<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametros extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('parametros_model','par');
	}

  public function index(){
    $data['titulo']="Administracion de Parámetros";
    $data['persona']=$this->usu->listarDatosPersona($this->session->userdata('usuario'));

    $data['parametro']=$this->par->listarParametro(1);
    $this->load->view('admin/guest/header',$data);
    $this->load->view('admin/guest/nav');
		$this->load->view('admin/parametros/parametros',$data);
    $this->load->view('admin/guest/footer');
  }
  public function mostrar(){
    $buscar = $this->input->post("buscar");
    $numeropagina=$this->input->post("nropagina");
    $cantidad=5;
    $inicio =($numeropagina -1)*$cantidad;
    $data = array("parametro"=>$this->par->buscar($buscar,$inicio,$cantidad),
    "totalregistros"=>count($this->par->buscar($buscar)),
    "cantidad"=>$cantidad);
    echo json_encode($data);
  }

  public function listarInformacionParametro(){
    $id = $this->input->post('id');
    $info['parametro']=$this->par->listarDatosParametroPorID($id);
    $info['detparametro']=$this->par->listarParametro(1);
    echo json_encode($info);
  }

	public function update(){
		//id del parametro
		$id = $this->input->post('id');
		//datos a modificar de parametros
		$persona= array("Nombre"=>$this->input->post('Parametro'),
										"Descripcion"=>$this->input->post('Descripcion'),
										"IDent_001_Estado"=>$this->input->post('Estado'));

		//funciones de actualizacion parametro
		$estado=$this->par->updateParametro($id,$persona);

		if($estado){
			$valor=true;
		}else{
			$valor = false;
		}

		$json['estado']=$estado;
		echo json_encode($json);
	}

	public function insertparametro(){
		$parametro= array("Nombre"=>$this->input->post('Parametro'),
										"Descripcion"=>$this->input->post('Descripcion'),
										"IDent_001_Estado"=>$this->input->post('Estado'));

		if($this->par->insertParametro($parametro)){
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

}
