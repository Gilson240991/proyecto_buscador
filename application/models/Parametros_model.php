<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametros_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	//obtenemos el total de filas para hacer la paginación
 function filas()
 {
	 $consulta = $this->db->get('parametro');
	 return  $consulta->num_rows() ;
 }

	 //obtenemos todas las persona a paginar con la función
	 //total_posts_paginados pasando la cantidad por página y el segmento
	 //como parámetros de la misma
 function total_paginados($por_pagina,$segmento)
			 {
					 $consulta = $this->db->get('parametro',$por_pagina,$segmento);
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
	 $this->db->like("parametro.Nombre",$buscar);
	 $this->db->or_like("parametro.Descripcion",$buscar);
	 if($inicio!==FALSE && $cantidadregistro!==FALSE){
		 $this->db->limit($cantidadregistro,$inicio);
	 }

	$this->db->select('parametro.*,parametro_detalle.Valor');
 	$this->db->from('parametro');
 	$this->db->join('parametro_detalle', 'parametro.IDent_001_Estado = parametro_detalle.IDent_Detalle');
 	$consulta = $this->db->get();

	// $consulta = $this->db->get("parametro");
	 return $consulta->result();
 }
 function listarParametro($id){
	 $this->db->select('parametro_detalle.*');
	 $this->db->from('parametro');
	 $this->db->join('parametro_detalle', 'parametro.IDent_Parametro = parametro_detalle.IDent_Parametro');
	 $this->db->where('parametro.IDent_Parametro',$id);
	 $query = $this->db->get();
	 if($query->num_rows() > 0 )
				{
						return $query->result();
				}
 }

 function listarDatosParametroPorID($id){
	 $this->db->select('*');
	 $this->db->from('parametro');
	 $this->db->where('IDent_Parametro',$id);
	 $query = $this->db->get();
	 if($query->num_rows() > 0 )
			 {
					 return $query->result();
			 }
 }


 function listarDatosParametroPorIDTod($id){
	$this->db->select('parametro.*,parametro_detalle.Valor');
	$this->db->from('parametro');
	$this->db->join('parametro_detalle', 'parametro.IDent_001_Estado = parametro_detalle.IDent_Detalle');
	$this->db->where('usuario.IDent_Persona',$id);
	$query = $this->db->get();
	if($query->num_rows() > 0 )
			{
					return $query->result();
			}
 }

 function updateParametro($id,$parametro){
	 $this->db->where('IDent_Parametro', $id);
	 $estado= $this->db->update('parametro', $parametro);
	 return $estado;
 }


function insertparametro($parametro){
	return $this->db->insert('parametro',$parametro);

}

function delete($id){
	$this->db->where('IDent_Persona', $id);
	return $this->db->delete('persona');
}
}

/* End of file login.php */
/* Location: ./application/models/login.php */
