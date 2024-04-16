<?php 
class Modelo_resultado2 extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/La_Paz');
	}
	public function M_lista_resultado2($idest){
		return $this->db->query("SELECT nombre_est, nombre_inteligencia, COUNT(*) as contar FROM estudiante INNER JOIN respuestas2 ON estudiante.idestudiante=respuestas2.idestudiante INNER JOIN preguntas2 ON respuestas2.idpreguntas2=preguntas2.idpreguntas2 INNER JOIN inteligencia ON preguntas2.idinteligencia=inteligencia.idinteligencia WHERE est_respuesta2=1 and respuestas2.idestudiante='$idest' and respuestas2.fecha_test = ( SELECT MAX(fecha_test) FROM respuestas2 ) GROUP by nombre_inteligencia ORDER by contar DESC")->result();
	}
    public function M_insert_resultado2($tabla,$obj){
		$this->db->insert($tabla,$obj);
	} 

	public function M_listar2(){
		return $this->db->query("SELECT *
			FROM resultados2")->result();
	}
}