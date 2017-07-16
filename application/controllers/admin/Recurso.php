<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recurso extends CI_Controller {
	public function __construct(){
		 parent::__construct();
		 $this->load->model('recurso_model','rec');
	}
	public function index()
	{
		$this->load->view('guest/header');
		$data['tipo']=$this->usu->listarTipoUsuario($this->session->userdata('usuario'));
		$this->load->view('admin/recurso/buscarrecurso',$data);
	}

	public function mostrar(){
		$buscar = $this->input->post("buscar");
		$numeropagina=$this->input->post("nropagina");
		$cantidad=5;
		$inicio =($numeropagina -1)*$cantidad;
		$data = array("recurso"=>$this->rec->buscar($buscar,$inicio,$cantidad),
		"totalregistros"=>count($this->rec->buscar($buscar)),
		"cantidad"=>$cantidad);
		echo json_encode($data);
	}

	public function htmlcrearrecurso(){
		$this->load->view('guest/header');
		$this->load->view('admin/recurso/crearrecurso');

	}
	public function crearrecurso(){
		$config["upload_path"]="./files";
		$config["allowed_types"]="png|jpg";

		$this->load->library("upload",$config);

		if($this->upload->do_upload('imagen')){
			$data = array("upload_data"=>$this->upload->data());

					$recurso = array("Codigo"	=>$this->input->post('codigo'),
													 "Nombre"	=>$this->input->post('nombre'),
													 "Descripcion"	=>$this->input->post('descripcion'),
													 "IDent_001_Estado"	=>$this->input->post('estado'),
													 "Fecha"	=>date('Y-m-d'),
													 "Imagen"=>$data["upload_data"]["file_name"]);

					if($this->rec->addrecurso($recurso)){
						$estado =true;
						$msj= "Se inserto correctamente el recurso";
					}else{
						$estado =false;
						$msj= "No se inserto el recurso";

					}

		}else{
			$estado =false;
			$msj="Hubo algun error";
		}

							$json['estado']=$estado;
							$json['msj']=$msj;
							echo json_encode($json);

	}

	public function deleterecurso(){
		$id = $this->input->post('id');
		$imagen =$this->input->post('imagen');

		unlink("./files/".$imagen);

		if($this->rec->delete($id)){
			$estado = true;
		}else{
			$estado = false;
		}
			$json['estado']=$estado;
			echo json_encode($json);
	}

	public function editar($id){
		$this->load->view('guest/header');

		$data['recurso'] =$this->rec->listarinforecurso($id);

		$this->load->view('admin/recurso/editarrecurso',$data);

	}

	public function actualizarrecurso(){

		$config["upload_path"]="./files";
		$config["allowed_types"]="png|jpg";

		$this->load->library("upload",$config);

		if($this->upload->do_upload('imagen')){
			$data = array("upload_data"=>$this->upload->data());
					$id = $this->input->post('hiddenidrecurso');
					$imagen = $this->rec->retornarimagenporid($id);
					unlink("./files/".$imagen->Imagen);
					$recurso = array("Codigo"	=>$this->input->post('codigo'),
													 "Nombre"	=>$this->input->post('nombre'),
													 "Descripcion"	=>$this->input->post('descripcion'),
													 "IDent_001_Estado"	=>$this->input->post('estado'),
													 "Imagen"=>$data["upload_data"]["file_name"]);

					if($this->rec->updaterecurso($recurso,$id)){
						$estado =true;
						$msj= "Se actualizo correctamente el recurso";
					}else{
						$estado =false;
						$msj= "No se actualizo el recurso";

					}

		}else{
			$id = $this->input->post('hiddenidrecurso');
			$recurso = array("Codigo"	=>$this->input->post('codigo'),
											 "Nombre"	=>$this->input->post('nombre'),
											 "Descripcion"	=>$this->input->post('descripcion'),
											 "IDent_001_Estado"	=>$this->input->post('estado'));

			if($this->rec->updaterecurso($recurso,$id)){
				$estado =true;
				$msj= "Se actualizo correctamente el recurso";
			}else{
				$estado =false;
				$msj= "No se actualizo el recurso";

			}

		}

							$json['estado']=$estado;
							$json['msj']=$msj;
							echo json_encode($json);

	}

}
