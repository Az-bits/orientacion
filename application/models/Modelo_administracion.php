<?php
class Modelo_administracion extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('America/La_Paz');
    }

    public function listar_estudiante()
    {
        return $this->db->query("SELECT  DISTINCT estudiante.ci_est,estudiante.nombre_est,estudiante.apellido_est,estudiante.celular_est,colegio.nombre_colegio,municipio.nombre_municipio,provincia.nombre_provincia,departamento.nombre_departamento,estudiante.fecha_reg_est
		FROM
		estudiante,colegio_estudiante,colegio,municipio,colegio_municipio,provincia,municipio_provincia,departamento,departamento_provincia
		WHERE estudiante.idestudiante=colegio_estudiante.idestudiante AND colegio.id_colegio=colegio_estudiante.id_colegio
		AND municipio.id_municipio=colegio_municipio.id_municipio AND colegio.id_colegio=colegio_municipio.id_colegio
		AND provincia.id_provincia=municipio_provincia.id_provincia AND municipio.id_municipio=municipio_provincia.id_municipio
		 AND departamento.id_departamento=departamento_provincia.id_departamento AND provincia.id_provincia=departamento_provincia.id_provincia AND estudiante.fecha_reg_est>'2020-12-31 23:59:59'
         GROUP BY estudiante.ci_est
         ORDER BY estudiante.apellido_est  ")->result();
    }
    //////////////////////////////////////////////////////////////////////////////////////
    ////////////////Modulos de preguntas de Test Vocacional///////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////
    public function listar_preguntas_test()
    {
        return $this->db->query("SELECT idpreguntas, nom_pregunta, nombre_area FROM preguntas INNER JOIN area_pregunta ON preguntas.idarea_pregunta = area_pregunta.idarea_pregunta WHERE preguntas.estado=1 ORDER BY preguntas.idpreguntas")->result();
    }
    public function listar_areas_test()
    {
        return $this->db->query("SELECT * FROM area_pregunta WHERE area_pregunta.estado=1")->result();
    }

    //////////////////////////////////////////////////////////////////////////////////////
    ////////////////Modulos de preguntas de Test Inteligencia///////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////
    public function listar_preguntas_inteligencia()
    {
        return $this->db->query("SELECT idpreguntas2, nom_pregunta2, nombre_inteligencia FROM preguntas2 INNER JOIN inteligencia ON preguntas2.idinteligencia = inteligencia.idinteligencia ORDER BY preguntas2.idpreguntas2")->result();
    }

    //////////////////////////////////////////////////////////////////////////////////////
    ////////////////Modulos de preguntas de Test Interes///////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////
    public function listar_interes_test()
    {
        return $this->db->query("SELECT preguntas3.idpreguntas3,preguntas3.nom_pregunta3,area_interes.nombre_interes FROM preguntas3 INNER JOIN area_interes ON preguntas3.idinteres = area_interes.idinteres ORDER BY preguntas3.idpreguntas3")->result();
    }
    public function listar_areas_interes()
    {
        return $this->db->query("SELECT * FROM area_interes WHERE area_interes.estado=1")->result();
    }

//modulo de listar en pdf - Chaside
    public function listar_es_pdf()
    {
        return $this->db->query("SELECT estudiante.ci_est,estudiante.nombre_est,estudiante.apellido_est,estudiante.edad_est,estudiante.sexo_est,colegio.nombre_colegio,municipio.nombre_municipio,respuestas.fecha_test,COUNT(respuestas.idestudiante) div 98 AS cantidad
		FROM colegio,municipio,respuestas,estudiante,colegio_estudiante,colegio_municipio
		WHERE estudiante.idestudiante=respuestas.idestudiante
		AND estudiante.idestudiante=colegio_estudiante.idestudiante
		AND colegio_estudiante.id_colegio=colegio.id_colegio
		AND colegio.id_colegio=colegio_municipio.id_colegio
		AND colegio_municipio.id_municipio=municipio.id_municipio
		GROUP BY estudiante.ci_est
		ORDER BY estudiante.apellido_est")->result();
    }

// Funcion para listar estudiantes por intervalo de fechas - chaside
    public function listar_es_pdf_intervalo($desde, $hasta)
    {
        return $this->db->query("SELECT estudiante.ci_est,estudiante.nombre_est,estudiante.apellido_est,estudiante.edad_est,estudiante.sexo_est,colegio.nombre_colegio,municipio.nombre_municipio,date(respuestas.fecha_test) as fecha
		FROM colegio,municipio,respuestas,estudiante,colegio_estudiante,colegio_municipio
		WHERE estudiante.idestudiante=respuestas.idestudiante AND estudiante.idestudiante=colegio_estudiante.idestudiante AND colegio_estudiante.id_colegio=colegio.id_colegio AND colegio.id_colegio=colegio_municipio.id_colegio AND colegio_municipio.id_municipio=municipio.id_municipio
		AND date(respuestas.fecha_test) BETWEEN '$desde' AND '$hasta'
		GROUP BY estudiante.ci_est
		ORDER BY estudiante.apellido_est")->result();
    }
// Funcion de listar en pdf - Test de inteligencia
    public function listar_es2_pdf()
    {
        return $this->db->query("SELECT estudiante.ci_est,estudiante.nombre_est,estudiante.apellido_est,estudiante.edad_est,estudiante.sexo_est,colegio.nombre_colegio,municipio.nombre_municipio,respuestas2.fecha_test, COUNT(respuestas2.idestudiante) div 98 AS cantidad
		FROM colegio,municipio,respuestas2,estudiante,colegio_estudiante,colegio_municipio
		WHERE estudiante.idestudiante=respuestas2.idestudiante
		AND estudiante.idestudiante=colegio_estudiante.idestudiante
		AND colegio_estudiante.id_colegio=colegio.id_colegio
		AND colegio.id_colegio=colegio_municipio.id_colegio
		AND colegio_municipio.id_municipio=municipio.id_municipio
		GROUP BY estudiante.ci_est
		ORDER BY estudiante.apellido_est")->result();
    }
// Funcion de listar estudiantes por intervalo de fechas - test de inteligencia
    public function listar_es2_pdf_intervalo($desde, $hasta)
    {
        return $this->db->query("SELECT estudiante.ci_est,estudiante.nombre_est,estudiante.apellido_est,estudiante.edad_est,estudiante.sexo_est,colegio.nombre_colegio,municipio.nombre_municipio,date(respuestas2.fecha_test) as fecha
		FROM colegio,municipio,respuestas2,estudiante,colegio_estudiante,colegio_municipio
		WHERE estudiante.idestudiante=respuestas2.idestudiante AND estudiante.idestudiante=colegio_estudiante.idestudiante AND colegio_estudiante.id_colegio=colegio.id_colegio AND colegio.id_colegio=colegio_municipio.id_colegio AND colegio_municipio.id_municipio=municipio.id_municipio
		AND date(respuestas2.fecha_test) BETWEEN '$desde' AND '$hasta'
		GROUP BY estudiante.ci_est
		ORDER BY estudiante.apellido_est")->result();
    }

//modulo de listar en pdf - test de interes profesional
    public function listar_es3_pdf()
    {
        return $this->db->query("SELECT estudiante.ci_est,estudiante.nombre_est,estudiante.apellido_est,estudiante.edad_est,estudiante.sexo_est,colegio.nombre_colegio,municipio.nombre_municipio,respuestas3.fecha_test, COUNT(respuestas3.idestudiante) div 98 AS cantidad
		FROM colegio,municipio,respuestas3,estudiante,colegio_estudiante,colegio_municipio
		WHERE estudiante.idestudiante=respuestas3.idestudiante AND estudiante.idestudiante=colegio_estudiante.idestudiante AND colegio_estudiante.id_colegio=colegio.id_colegio AND colegio.id_colegio=colegio_municipio.id_colegio AND colegio_municipio.id_municipio=municipio.id_municipio
		GROUP BY estudiante.ci_est
		ORDER BY estudiante.apellido_est")->result();
    }

// Funcion para listar estudiantes por intervalo de fechas - test de interes profesional
    public function listar_es3_pdf_intervalo($desde, $hasta)
    {
        return $this->db->query("SELECT estudiante.ci_est,estudiante.nombre_est,estudiante.apellido_est,estudiante.edad_est,estudiante.sexo_est,colegio.nombre_colegio,municipio.nombre_municipio,date(respuestas3.fecha_test) as fecha
		FROM colegio,municipio,respuestas3,estudiante,colegio_estudiante,colegio_municipio
		WHERE estudiante.idestudiante=respuestas3.idestudiante AND estudiante.idestudiante=colegio_estudiante.idestudiante AND colegio_estudiante.id_colegio=colegio.id_colegio AND colegio.id_colegio=colegio_municipio.id_colegio AND colegio_municipio.id_municipio=municipio.id_municipio
		AND date(respuestas3.fecha_test) BETWEEN '$desde' AND '$hasta'
		GROUP BY estudiante.ci_est
		ORDER BY estudiante.apellido_est")->result();
    }
//modulo de listar en pdf - test de aptitudes diferentes
    public function listar_es4_pdf($dat_tipo)
    {
        if ($dat_tipo == 0) {
            return $this->db->query("SELECT estudiante.ci_est,estudiante.nombre_est,estudiante.apellido_est,estudiante.edad_est,estudiante.sexo_est,colegio.nombre_colegio,municipio.nombre_municipio,dat_resultado.fecha_creado
            FROM colegio,municipio,dat_resultado,estudiante,colegio_estudiante,colegio_municipio
            WHERE estudiante.idestudiante=dat_resultado.id_usuario
            AND estudiante.idestudiante=colegio_estudiante.idestudiante
            AND colegio_estudiante.id_colegio=colegio.id_colegio
            AND colegio.id_colegio=colegio_municipio.id_colegio
            AND colegio_municipio.id_municipio=municipio.id_municipio
            GROUP BY estudiante.ci_est
            ORDER BY estudiante.apellido_est")->result();
        } else if ($dat_tipo == 7) {
            return $this->db->query("SELECT estudiante.ci_est,estudiante.nombre_est,estudiante.apellido_est,estudiante.edad_est,estudiante.sexo_est,colegio.nombre_colegio,municipio.nombre_municipio,dat_resultado.fecha_creado
            FROM colegio,municipio,dat_resultado,estudiante,colegio_estudiante,colegio_municipio
            WHERE estudiante.idestudiante=dat_resultado.id_usuario
            AND estudiante.idestudiante=colegio_estudiante.idestudiante
            AND colegio_estudiante.id_colegio=colegio.id_colegio
            AND colegio.id_colegio=colegio_municipio.id_colegio
            AND colegio_municipio.id_municipio=municipio.id_municipio
            AND (dat_resultado.id_dat_tipo=7 OR dat_resultado.id_dat_tipo=8)
            GROUP BY estudiante.ci_est
            ORDER BY estudiante.apellido_est")->result();
        } else {
            return $this->db->query("SELECT estudiante.ci_est,estudiante.nombre_est,estudiante.apellido_est,estudiante.edad_est,estudiante.sexo_est,colegio.nombre_colegio,municipio.nombre_municipio,dat_resultado.fecha_creado
            FROM colegio,municipio,dat_resultado,estudiante,colegio_estudiante,colegio_municipio
            WHERE estudiante.idestudiante=dat_resultado.id_usuario
            AND estudiante.idestudiante=colegio_estudiante.idestudiante
            AND colegio_estudiante.id_colegio=colegio.id_colegio
            AND colegio.id_colegio=colegio_municipio.id_colegio
            AND colegio_municipio.id_municipio=municipio.id_municipio
            AND dat_resultado.id_dat_tipo=$dat_tipo
            GROUP BY estudiante.ci_est
            ORDER BY estudiante.apellido_est")->result();
        }
    }

// Funcion para listar estudiantes por intervalo de fechas - test de interes profesional
    public function listar_es4_pdf_intervalo($desde, $hasta, $dat_tipo)
    {
        if ($dat_tipo == 0) {
            return $this->db->query("SELECT estudiante.ci_est,estudiante.nombre_est,estudiante.apellido_est,estudiante.edad_est,estudiante.sexo_est,colegio.nombre_colegio,municipio.nombre_municipio,date(dat_resultado.fecha_creado) as fecha
            FROM colegio,municipio,dat_resultado,estudiante,colegio_estudiante,colegio_municipio
            WHERE estudiante.idestudiante=dat_resultado.id_usuario
            AND estudiante.idestudiante=colegio_estudiante.idestudiante
            AND colegio_estudiante.id_colegio=colegio.id_colegio
            AND colegio.id_colegio=colegio_municipio.id_colegio
            AND colegio_municipio.id_municipio=municipio.id_municipio
            AND date(dat_resultado.fecha_creado) BETWEEN '$desde' AND '$hasta'
            GROUP BY estudiante.ci_est
            ORDER BY estudiante.apellido_est")->result();
        } else if ($dat_tipo == 7) {
            return $this->db->query("SELECT estudiante.ci_est,estudiante.nombre_est,estudiante.apellido_est,estudiante.edad_est,estudiante.sexo_est,colegio.nombre_colegio,municipio.nombre_municipio,date(dat_resultado.fecha_creado) as fecha
            FROM colegio,municipio,dat_resultado,estudiante,colegio_estudiante,colegio_municipio
            WHERE estudiante.idestudiante=dat_resultado.id_usuario
            AND estudiante.idestudiante=colegio_estudiante.idestudiante
            AND colegio_estudiante.id_colegio=colegio.id_colegio
            AND colegio.id_colegio=colegio_municipio.id_colegio
            AND colegio_municipio.id_municipio=municipio.id_municipio
            AND (dat_resultado.id_dat_tipo=7 OR dat_resultado.id_dat_tipo=8)
            AND date(dat_resultado.fecha_creado) BETWEEN '$desde' AND '$hasta'
            GROUP BY estudiante.ci_est
            ORDER BY estudiante.apellido_est")->result();
        } else {
            return $this->db->query("SELECT estudiante.ci_est,estudiante.nombre_est,estudiante.apellido_est,estudiante.edad_est,estudiante.sexo_est,colegio.nombre_colegio,municipio.nombre_municipio,date(dat_resultado.fecha_creado) as fecha, dat_resultado.id_dat_tipo
            FROM colegio,municipio,dat_resultado,estudiante,colegio_estudiante,colegio_municipio
            WHERE estudiante.idestudiante=dat_resultado.id_usuario
            AND estudiante.idestudiante=colegio_estudiante.idestudiante
            AND colegio_estudiante.id_colegio=colegio.id_colegio
            AND colegio.id_colegio=colegio_municipio.id_colegio
            AND colegio_municipio.id_municipio=municipio.id_municipio
            AND dat_resultado.id_dat_tipo=$dat_tipo
            AND date(dat_resultado.fecha_creado) BETWEEN '$desde' AND '$hasta'
            GROUP BY estudiante.ci_est
            ORDER BY estudiante.apellido_est")->result();
        }
    }

    public function listar_es_pdf_2021()
    {
        return $this->db->query("SELECT DISTINCT (respuestas.idestudiante),estudiante.nombre_est,estudiante.apellido_est,estudiante.colegio_est,estudiante.ci_est
		FROM `respuestas`,estudiante
		WHERE respuestas.idestudiante=estudiante.idestudiante AND respuestas.fecha_test > '2020-12-31 23:59:59'")->result();
    }
    public function listar_est_total_2021()
    {
        return $this->db->query("SELECT DISTINCT(estudiante.ci_est),estudiante.nombre_est,estudiante.apellido_est,estudiante.colegio_est,estudiante.ci_est FROM estudiante WHERE estudiante.fecha_reg_est > '2020-10-30 23:59:59'")->result();
    }
    public function lista_ue_uno()
    {
        return $this->db->query("SELECT colegio.nombre_colegio,COUNT(estudiante.idestudiante) AS TOTAL
		FROM colegio,colegio_estudiante,estudiante
		WHERE estudiante.idestudiante=colegio_estudiante.idestudiante
		AND colegio_estudiante.id_colegio=colegio.id_colegio
		GROUP BY colegio.nombre_colegio ORDER BY TOTAL DESC")->result();
    }

    public function listar_acceso()
    {
        return $this->db->query("SELECT * FROM accesos")->result();
    }
    public function listar_colegios()
    {
        return $this->db->query("SELECT * FROM colegio ORDER BY id_colegio DESC")->result();
    }

//////NUEVO JUANPA
    //listar_test_pregunta
    public function listar_test_pregunta($id)
    {
        return $this->db->query("SELECT dat_test.* FROM dat_test INNER JOIN dat_tipo ON dat_test.id_dat = dat_tipo.id_dat_tipo WHERE dat_test.estado!='ELIMINADO' AND dat_tipo.id_dat_tipo='$id' ORDER BY dat_test.estado,dat_test.id_test DESC, dat_test.fecha_creado DESC ")->result();
    }
//listar_test_respuestas
    public function listar_test_respuestas($id)
    {
        return $this->db->query("SELECT dat_pregunta.* FROM dat_pregunta INNER JOIN dat_test ON dat_pregunta.id_dat_test = dat_test.id_test WHERE dat_pregunta.estado!='ELIMINADO' AND dat_test.id_test='$id' ORDER BY dat_pregunta.estado,dat_pregunta.id_pregunta DESC, dat_pregunta.fecha_creado DESC ")->result();
    }

}
