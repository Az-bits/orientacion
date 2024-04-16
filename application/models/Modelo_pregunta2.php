<?php 
class Modelo_pregunta2 extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/La_Paz');
	}
	public function M_lista_pregunta2(){
		return $this->db->query("SELECT idpreguntas2, nom_pregunta2, nombre_inteligencia 
			FROM preguntas2 
			INNER JOIN inteligencia 
			ON preguntas2.idinteligencia = inteligencia.idinteligencia 
			ORDER BY preguntas2.idpreguntas2")->result();
	}
	public function M_test2(){
		return $this->db->query("SELECT idpreguntas2, nom_pregunta2
			FROM preguntas2 WHERE estado=1" )->result();
		
	}
}