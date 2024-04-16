<?php 
class Modelo_respuesta3 extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/La_Paz');
	}
	public function M_insertar_respuesta3($idest, $idpreg, $respuesta){
    	$arrayDatos = array(
    	'idestudiante' => $idest,
    	'idpreguntas2' => $idpreg,
    	'est_respuesta2' => $respuesta,
    	); 
    	$this->db->insert('respuestas2', $arrayDatos);    
    }
	public function insertar_tabla_sys3($tabla,$obj){
		$this->db->insert($tabla,$obj);
		return $this->db->insert_id();
	}
	public function actualizartabla()
	{
		 $this->db->query("UPDATE `respuestas3` SET `estado` = '0' WHERE `respuestas3`.`estado` = 1")->result();
	}
	public function contador($id)
	{
		return $this->db->query("SELECT COUNT(*) FROM `respuestas3` WHERE respuestas3.idestudiante=$id")->result();
	}
}
