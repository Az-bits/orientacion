<?php 
class Modelo_pregunta extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/La_Paz');
	}
	public function M_lista_pregunta(){
		return $this->db->query("SELECT idpreguntas, nom_pregunta, nombre_area
			FROM preguntas 
			INNER JOIN area_pregunta 
			ON preguntas.idarea_pregunta = area_pregunta.idarea_pregunta 
			ORDER BY preguntas.idpreguntas")->result();
	}
	public function M_test(){
		return $this->db->query("SELECT idpreguntas, nom_pregunta
			FROM preguntas WHERE estado=1")->result();
		
	}
}