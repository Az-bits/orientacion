<?php
class Modelo_estudiante extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set('America/La_Paz');
    }
    public function getCiudades($id_departamento)
    {
        return $this->db->query("SELECT provincia.id_provincia,provincia.nombre_provincia,departamento.nombre_departamento
		FROM provincia,departamento,departamento_provincia
		WHERE departamento.id_departamento=departamento_provincia.id_departamento
		AND provincia.id_provincia=departamento_provincia.id_provincia
		 AND departamento.id_departamento=$id_departamento
		 ORDER BY provincia.nombre_provincia ASC")->result();
    }
    public function getMunicipio($id_departamento)
    {
        return $this->db->query("SELECT municipio.id_municipio,municipio.nombre_municipio,provincia.nombre_provincia
		FROM municipio,provincia,municipio_provincia
		 WHERE provincia.id_provincia=municipio_provincia.id_provincia
		 AND municipio.id_municipio=municipio_provincia.id_municipio
		 AND provincia.id_provincia=$id_departamento
		 ORDER BY municipio.nombre_municipio ASC")->result();
    }
    public function getColegio($id_departamento)
    {
        return $this->db->query("SELECT colegio.id_colegio,colegio.nombre_colegio,municipio.nombre_municipio
		 FROM colegio,municipio,colegio_municipio
		  WHERE colegio.id_colegio=colegio_municipio.id_colegio
		  AND municipio.id_municipio=colegio_municipio.id_municipio
		  AND municipio.id_municipio=$id_departamento
		  AND colegio.estado_colegio='ACTIVO'
		  ORDER BY colegio.nombre_colegio ASC")->result();
    }
    public function M_insertar_estudiante($txtCI, $txtNombres, $txtApellidos, $txtCelular, $txtEdad, $txtSexo)
    {
        $arrayDatos = array(
            'ci_est' => $txtCI,
            'nombre_est' => $txtNombres,
            'apellido_est' => $txtApellidos,
            'celular_est' => $txtCelular,
            'edad_est' => $txtEdad,
            'sexo_est' => $txtSexo
        );
        $this->db->insert('estudiante', $arrayDatos);
        return $this->db->insert_id();
    }
    public function M_editar_estudiante($txtCI, $txtNombres, $txtApellidos, $txtCelular, $txtEdad, $txtSexo, $idestud) {
        $arrayDatos = array(
            'nombre_est' => $txtNombres,
            'apellido_est' => $txtApellidos,
            'celular_est' => $txtCelular,
            'edad_est' => $txtEdad,
            'sexo_est' => $txtSexo
        );
        // Update -> mediante CI por razones de varios test que realiza un estudiante
        $this->db->update('estudiante', $arrayDatos, array('ci_est' => $txtCI));
    }
    public function M_insertar_colegio_estudiante($id, $colegio)
    {
        $res = $this->db->query("SELECT COUNT(*) AS count FROM colegio_estudiante WHERE id_colegio = $colegio AND idestudiante = $id")->row();
        
        if ($res->count < 1) {
            $arrayDatos = array(
                'id_colegio' => $colegio,
                'idestudiante' => $id,
                'estado_colegio_estudiante' => "ACTIVO",
    
            );
            $this->db->insert('colegio_estudiante', $arrayDatos);
        }
    }

    public function M_lista_estudiante()
    {
        return $this->db->query("SELECT * FROM `estudiante`")->result();
    }
    public function M_buscar_ci($CI)
    {
        return $this->db->query("SELECT * FROM `estudiante` WHERE ci_est = $CI")->row();
    }
    public function M_buscar_id($idestudiante)
    {
        return $this->db->query("SELECT * FROM `estudiante` WHERE idestudiante = $idestudiante")->row();
    }
    public function M_buscar_test($idestudiante, $id_tipo_test)
    {

        $sql1 = "SELECT * FROM `dat_resultado` WHERE id_usuario = $idestudiante AND id_dat_tipo = $id_tipo_test";

        return $this->db->query($sql1)->row();

    }
    public function M_buscar_pregunta($idpregunta, $id_dat_test)
    {
        return $this->db->query("SELECT * FROM `dat_pregunta` WHERE id_pregunta = $idpregunta AND id_dat_test = $id_dat_test")->row();
    }
    public function M_lista_test($idestudiante, $id_tipo_test, $total)
    {
        $fecha = $this->db->query("SELECT fecha_creado FROM `dat_resultado` WHERE id_usuario = $idestudiante AND id_dat_tipo = $id_tipo_test ORDER BY fecha_creado DESC LIMIT 1")->row();

        return $this->db->query("SELECT * FROM `dat_resultado`
        WHERE id_usuario = $idestudiante
        AND id_dat_tipo = $id_tipo_test
        AND fecha_creado LIKE '$fecha->fecha_creado'")->result();
    }
    public function M_insertar_colegio($colegio)
    {
        $arrayDatos = array(
            'nombre_colegio' => $colegio,
            'estado_colegio' => "ACTIVO",
        );
        $this->db->insert('colegio', $arrayDatos);
        return $this->db->insert_id();
    }
    public function M_editar_colegio($id, $colegio, $estado)
    {
        $arrayDatos = array(
            'nombre_colegio' => $colegio,
            'estado_colegio' => $estado,
        );
        $this->db->where('id_colegio', $id);
        $this->db->update('colegio', $arrayDatos);
    }
    public function M_insertar_colegio_municipio($colegio, $municipio)
    {
        $arrayDatos = array(

            'id_colegio' => $colegio,
            'id_municipio' => $municipio,
            'estado_colegio_municipio' => "ACTIVO",
        );
        $this->db->insert('colegio_municipio', $arrayDatos);

    }
}
