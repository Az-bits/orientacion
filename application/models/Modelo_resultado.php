<?php
class Modelo_resultado extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('America/La_Paz');
    }
    public function M_lista_resultado($idest)
    {
        return $this->db->query("SELECT nombre_est, apellido_est, area_pregunta.idarea_pregunta, nombre_area, carrera, COUNT(*) as contar, areas_existentes.id_area_existente
		FROM estudiante INNER JOIN respuestas ON estudiante.idestudiante=respuestas.idestudiante
		INNER JOIN preguntas ON respuestas.idpreguntas=preguntas.idpreguntas
		INNER JOIN area_pregunta ON preguntas.idarea_pregunta=area_pregunta.idarea_pregunta

		INNER JOIN areas_existentes ON area_pregunta.idarea_pregunta=areas_existentes.id_area_pregunta

		WHERE est_respuesta=1 and respuestas.idestudiante='$idest' and respuestas.fecha_test =
		 ( SELECT MAX(fecha_test) FROM respuestas )
		 GROUP by nombre_area ORDER by contar DESC LIMIT 2")->result();
    }
    public function M_lista_areasExistentes($id_area_pregunta)
    {
		return $this->db->query("SELECT * FROM areas_existentes WHERE id_area_pregunta = $id_area_pregunta LIMIT 2")->result();
    }
    public function M_lista_carrerasExistentes($id_area_existente)
    {
		return $this->db->query("SELECT nombre_carrera FROM carrera_area WHERE id_area_existente = $id_area_existente")->result();
    }
    public function M_lista_areaDat($id_area_existente)
    {
		$sql = "SELECT dat_tipo.id_dat_tipo, test
		FROM dat_tipo
		INNER JOIN area_tipo_dat
		ON dat_tipo.id_dat_tipo = area_tipo_dat.id_dat_tipo
		WHERE area_tipo_dat.id_area_existente = $id_area_existente
    LIMIT 2";
		return $this->db->query($sql)->result();
    }
    public function M_insert_resultado($tabla, $obj)
    {
        $this->db->insert($tabla, $obj);
    }

    public function M_listar()
    {
        return $this->db->query("SELECT *
			FROM resultados")->result();
    }
}
