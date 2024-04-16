<?php 
class Modelo_respuesta extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/La_Paz');
	}
	public function M_insertar_respuesta($idest, $idpreg, $respuesta){
    	$arrayDatos = array(
    	'idestudiante' => $idest,
    	'idpreguntas' => $idpreg,
    	'est_respuesta' => $respuesta,
    	); 
    	$this->db->insert('respuestas', $arrayDatos);    
    }
	public function insertar_tabla_sys($tabla,$obj){
		$this->db->insert($tabla,$obj);
		return $this->db->insert_id();
	}
}