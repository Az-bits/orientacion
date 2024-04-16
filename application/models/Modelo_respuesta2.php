<?php 
class Modelo_respuesta2 extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/La_Paz');
	}
	public function M_insertar_respuesta2($idest, $idpreg, $respuesta){
    	$arrayDatos = array(
    	'idestudiante' => $idest,
    	'idpreguntas2' => $idpreg,
    	'est_respuesta2' => $respuesta,
    	); 
    	$this->db->insert('respuestas2', $arrayDatos);    
    }
	public function insertar_tabla_sys2($tabla,$obj){
		$this->db->insert($tabla,$obj);
		return $this->db->insert_id();
	}
}