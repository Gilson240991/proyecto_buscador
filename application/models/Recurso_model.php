<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recurso_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}


		//obtenemos el total de filas para hacer la paginación
	 function filas()
	 {
		 $consulta = $this->db->get('recurso');
		 return  $consulta->num_rows() ;
	 }

		 //obtenemos todas las persona a paginar con la función
		 //total_posts_paginados pasando la cantidad por página y el segmento
		 //como parámetros de la misma
	 function total_paginados($por_pagina,$segmento)
				 {
						 $consulta = $this->db->get('recurso',$por_pagina,$segmento);
						 if($consulta->num_rows()>0)
						 {
								 foreach($consulta->result() as $fila)
		 {
				 $data[] = $fila;
		 }
										 return $data;
						 }
	 }

	 function buscar($buscar,$inicio=FALSE,$cantidadregistro=FALSE){
		 $this->db->like("Codigo",$buscar);
		 $this->db->or_like("Nombre",$buscar);
		 $this->db->or_like("Descripcion",$buscar);
		 if($inicio!==FALSE && $cantidadregistro!==FALSE){
			 $this->db->limit($cantidadregistro,$inicio);
		 }
		 $consulta = $this->db->get("recurso");
		 return $consulta->result();
	 }

function addrecurso($recurso){
	try {
		$this->db->insert('recurso',$recurso);
	if($this->db->insert_id()>0){
		$estado = TRUE;
	}else{
		$estado =FALSE;
	}

	} catch (Exception $e) {

	}
	return $estado;
}

function delete($id){
	$this->db->where('IDent_Recurso', $id);
	return $this->db->delete('recurso');
}
function updaterecurso($recurso,$id){
$this->db->where('IDent_Recurso', $id);
 $estado= $this->db->update('recurso', $recurso);

	return $estado;
}

function listarinforecurso($id){
	$this->db->select('*');
	$this->db->from('recurso');
	$this->db->where('IDent_Recurso',$id);

	$query = $this->db->get();
	if($query->num_rows() > 0 )
			{
					return $query->result();
			}
}

function retornarimagenporid($id){
	$this->db->select("Imagen");
	$this->db->from("recurso");
	$this->db->where('IDent_Recurso',$id);
	$resultado =$this->db->get();
	return $resultado->row();

}

}

/* End of file login.php */
/* Location: ./application/models/login.php */
