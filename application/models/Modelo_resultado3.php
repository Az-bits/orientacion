<?php 
class Modelo_resultado3 extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/La_Paz');
	}
	public function M_lista_resultado3($idest){
		return $this->db->query("SELECT nombre_est, nombre_interes, COUNT(*) as contar
		 FROM estudiante INNER JOIN respuestas3 ON estudiante.idestudiante=respuestas3.idestudiante
		  INNER JOIN preguntas3 ON respuestas3.idpreguntas3=preguntas3.idpreguntas3 
		  INNER JOIN area_interes ON preguntas3.idinteres=area_interes.idinteres 
		  WHERE est_respuesta3=1 and respuestas3.idestudiante='$idest' and respuestas3.fecha_test = 
		  ( SELECT MAX(fecha_test) FROM respuestas3 ) GROUP by nombre_interes ORDER by contar DESC")
		  ->result();
	}
	public function M_lista_resultado_est3($idest){
		return $this->db->query("SELECT * FROM estudiante WHERE estudiante.idestudiante=$idest")
		  ->result();
	}
	public function M_lista_interes(){
		return $this->db->query("SELECT * FROM area_interes")
		  ->result();
	}
	public function resultados($idest,$id_area){
		return $this->db->query("SELECT SUM(respuestas3.est_respuesta3) AS SUMA
		FROM area_interes,preguntas3,respuestas3
		WHERE area_interes.idinteres=preguntas3.idinteres 
		AND preguntas3.idpreguntas3=respuestas3.idpreguntas3 
		AND area_interes.idinteres=$id_area 
		AND respuestas3.idestudiante=$idest ORDER BY respuestas3.fecha_test DESC LIMIT 6")
		  ->result();
	}
	public function resultado2($idest,$id_area){
		return $this->db->query("SELECT SUM(respuestas3.est_respuesta3) AS SUMA
		FROM area_interes,preguntas3,respuestas3
		WHERE area_interes.idinteres=preguntas3.idinteres 
		AND preguntas3.idpreguntas3=respuestas3.idpreguntas3 
		AND area_interes.idinteres=$id_area 
		AND respuestas3.idestudiante=$idest ORDER BY respuestas3.fecha_test DESC LIMIT 6")->row();
	}
    public function M_insert_resultado3($tabla,$obj){
		$this->db->insert($tabla,$obj);
	} 
	public function lista_area_campo(){ 
		return $this->db->query("SELECT *
			FROM area_interes")->result();
	}
	public function M_listar3(){ 
		return $this->db->query("SELECT *
			FROM resultados3")->result();
	}
}