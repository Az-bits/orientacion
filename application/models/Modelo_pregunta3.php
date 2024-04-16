<?php 
class Modelo_pregunta3 extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/La_Paz');
	}
	public function M_lista_pregunta(){
		return $this->db->query("SELECT idpreguntas3, nom_pregunta3, nombre_interes
			FROM preguntas3 
			INNER JOIN area_interes 
			ON preguntas3.idinteres = area_interes.idinteres 
			ORDER BY preguntas3.idpreguntas3")->result();
	}
	public function M_test3(){
		return $this->db->query("SELECT idpreguntas3, nom_pregunta3
			FROM preguntas3 WHERE estado=1")->result();
		
	}
}