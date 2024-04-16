<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_administracion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->load->model('Modelo_administracion');
		$this->load->model('Modelo_configuracion');
		$this->load->model('Backend_model');
		
		if (!$this->session->userdata('is_logued_in')) {
			redirect(base_url().'login','refresh');
		}
		date_default_timezone_set('America/La_Paz');
		
		$this->load->helper('funciones_helper');
		$this->menu = $this->Backend_model->listar_menus_privilegios();
	}
	public function index()
	{
		redirect(base_url(Hasher::make(1)), 'refresh');
	}
	//****************************************************************/
	//ADMINISTRACION DE LAS PREGUNTAS DEL TEST CHASIDE(PRIMER TEST)//
	//****************************************************************/
	// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	
	
	//MOSTRAR LOS RESULTADOS OBTENIDOS POR EL PRIMER TEST(PROCESO)
	public function mostrar_resultado_test(){
		if ($this->menu['convocatoriasComunicados']=='convocatoriasComunicados') {
			$dato['menu']=$this->menu;
			$dato['menu_a']='20';
			$dato['contenido']="admin_test/admin_resultado_test";
			$this->load->view("plantilla",$dato);
		}else{
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	//%%%%%%%%PREGUNTAS DEL PRIMER TEST(CHASIDE)
	//MOSTRAR LAS PREGUNTAS DEL PRIMER TEST PARA SU ADMINISTRACIÓN
	public function mostrar_test_vocacional(){
		if ($this->menu['convocatoriasComunicados']=='convocatoriasComunicados') {
			$dato['menu']=$this->menu;
			$dato['menu_a']='20';
			$dato['contenido']="admin_test/admin_test_vocacional";
			$this->load->view("plantilla",$dato);
		}else{
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
		}
	//REDIRECCIONA A UNA VENTANA EN LA CUAL ESTA  EL FORMULARIO DE NUEVA PREGUNTA
	public function nueva_pregunta_test(){
		if ($this->menu['convocatoriasComunicados']=='convocatoriasComunicados') {
			$dato['menu']=$this->menu;
			$dato['menu_a']='20';
			$dato['contenido']="admin_test/nueva_pregunta";
			$this->load->view("plantilla",$dato);
		}else{
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	//CAPTURA LOS DATOS ENVIADOS POR FORMULARIO  DE NUEVA PREGUNTA DE TEST(PRIMER TEST)PARA ENVIAR AL MODELO
	public function guardar_nueva_pregunta_test(){
	$id_usuario=$this->session->userdata('user_id');
	$nom_pregunta=filter_var(strtolower($this->input->post('pregunta')), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$idarea_pregunta=$this->input->post('id_area');
	
	$obj=array(
		'nom_pregunta'=>$nom_pregunta,
		'idarea_pregunta'=>$idarea_pregunta			
	);
	$this->Modelo_configuracion->insertar_tabla_sys('preguntas',$obj);
	}
	//RECUPERA LOS DATOS DE UNA DETERMINADA PREGUNTA PARA MOSTRAR EN UNA VENTANA (LISTA PARA SU EDICION)
	public function editar_pregunta_test($id){	
	$idpreguntas=$id; 
	if ( $idpreguntas)  {
		$dato['obj']=$this->Modelo_configuracion->tabla_row_sys('preguntas','idpreguntas',$idpreguntas);
		$dato['menu']=$this->menu;
		$dato['menu_a']='20';
		$dato["contenido"] = "admin_test/editar_pregunta_test";
		$this->load->view('plantilla', $dato);
	}else{
		redirect(base_url(Hasher::make(1)), 'refresh');
	}
	}
	//GUARDA O ACTUALIZA LOS DATOS ENVIANDO AL MODELO CORRESPONDIENTE DEL FORMULARIO EN LA CUAL SE RECUPERO 
	//LOS DATOS PARA SU EDICION
	public function guardar_editar_pregunta_test(){
	$id_usuario=$this->session->userdata('user_id');
	$nom_pregunta=filter_var(strtolower($this->input->post('pregunta')), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$idarea_pregunta=$this->input->post('id_area');
	$idpregunta=$this->input->post('id');	
	$obj=array(
		'nom_pregunta'=>$nom_pregunta,
		'idarea_pregunta'=>$idarea_pregunta			
	);
	$this->Modelo_configuracion->editar_tabla_sys('preguntas',$obj,'idpreguntas',$idpregunta);
	}
	//REALIZA EL ELIMINADO LOGICO DE LAS PREGUNTAS DEL PRIMER TEST
	public function eliminar_pregunta_test(){
		$id=$this->input->post('idpreguntas');
		$estado=0;
		$obj=array(
			'estado'=>$estado			
		);
		$this->Modelo_configuracion->editar_tabla_sys('preguntas',$obj,'idpreguntas',$id);
	}

	//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	//AREAS DEL PRIMER TEST

	//MOSTRAR LAS AREAS QUE EXISTEN Y EN LA CUAL SE CLASIFICAN LAS PREGUNTAS
	public function mostrar_area_test()
	{
		if ($this->menu['convocatoriasComunicados'] == 'convocatoriasComunicados') {
			$dato['menu'] = $this->menu;
			$dato['menu_a'] = '20';
			$dato['contenido'] = "admin_test/admin_area_test";
			$this->load->view("plantilla", $dato);
		} else {
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	//REDIRECCIONA A UNA VENTANA CON EL FORMULARIO DE NUEVA AREA PARA EL PRIMER TEST
	public function nueva_area_test(){
		if ($this->menu['convocatoriasComunicados']=='convocatoriasComunicados') {
			$dato['menu']=$this->menu;
			$dato['menu_a']='20';
			$dato['contenido']="admin_test/nueva_area_test";
			$this->load->view("plantilla",$dato);
		}else{
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	//CAPTURA LOS DATOS DEL FORMULARIO DE NUEVA AREA DEL PRIMER TEST(CHASIDE) PARA ENVIAR AL MODELO
	public function guardar_nueva_area_test(){
		$id_usuario=$this->session->userdata('user_id');
		$nombre_area=filter_var(strtolower($this->input->post('area')), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$carrera=filter_var(strtolower($this->input->post('carrera')), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$obj=array(
			'nombre_area'=>$nombre_area,
			'carrera'=>$carrera			
		);
		$this->Modelo_configuracion->insertar_tabla_sys('area_pregunta',$obj);
	}
	//RECUPERA LOS DATOS DEL AREA DEL PRIMER TEST SELECCIONADO PARA ENVIAR A LA 
	//VENTANA CON EL FORMULARIO PARA SU EDICIÓN
	public function editar_area_test($id){	
		$idarea=$id; 
		if ( $idarea)  {
			$dato['obj']=$this->Modelo_configuracion->tabla_row_sys('area_pregunta','idarea_pregunta',$idarea);
			$dato['menu']=$this->menu;
			$dato['menu_a']='20';
			$dato["contenido"] = "admin_test/editar_area_test";
			$this->load->view('plantilla', $dato);
			# code...
		}else{
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	//CAPTURA LOS NUEVOS DATOS DE LAS AREAS PARA SU CORRESPONDIENTE ACTUALIZACIÓN
	public function guardar_area_test_editado()
	{	$id_usuario = $this->session->userdata('user_id');
		$area = filter_var(strtolower($this->input->post('area')), FILTER_SANITIZE_STRING,
			FILTER_FLAG_STRIP_HIGH
		);
		$carrera = filter_var(strtolower($this->input->post('carrera')), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$idarea = $this->input->post('id');
		$obj = array(
			'nombre_area' => $area,
			'carrera' => $carrera
		);
		$this->Modelo_configuracion->editar_tabla_sys('area_pregunta', $obj, 'idarea_pregunta', $idarea);
	}
	//REALIZA LA ELIMINACION LOGICA DE UNA DETERMINADA AREA DEL PRIMER TEST
	public function eliminar_area_test()
	{	$id = $this->input->post('idarea_pregunta');
		$estado = 0;
		$obj = array(
			'estado' => $estado
		);
		$this->Modelo_configuracion->editar_tabla_sys('area_pregunta', $obj, 'idarea_pregunta', $id);
	}
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// 	//             FIN MODULOS DEL PRIMER TEST DE ORIENTACION(CHASIDE)
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


//****************************************************************/
//ADMINISTRACION DE LAS PREGUNTAS DEL TEST INTELIGENCIA(SEGUNDO TEST)//
//****************************************************************/
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
//AFIRMACIONES

//REDIRECCIONA A UNA VENTANA EN LA CUALSE ENCUENTRA TODAS LA AFIRMACIONES PARA EL
//SEGUNDO TEST DE INTELIGENCIA
public function mostrar_test_inteligencia(){
	if ($this->menu['convocatoriasComunicados']=='convocatoriasComunicados') {
		$dato['menu']=$this->menu;
		$dato['menu_a']='20';
		$dato['contenido']="admin_inte/admin_test_inteligencia";
		$this->load->view("plantilla",$dato);
	}else{
		redirect(base_url(Hasher::make(1)), 'refresh');
	}
}
//REDIRECCIONA A UNA VENTANA CON EL FORMULARIO PARA UNA NUEVA AFIRMACIÓN
//(PREGUNTA PARA SEGUNTO TEST)
public function nueva_test_inteligencia()
	{
		if ($this->menu['convocatoriasComunicados'] == 'convocatoriasComunicados') {
			$dato['menu'] = $this->menu;
			$dato['menu_a'] = '20';
			$dato['contenido'] = "admin_inte/nueva_afirmacion";
			$this->load->view("plantilla", $dato);
		} else {
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	//CAPTURA LOS DATOS LLENADOS EN FORMULARIO PARA UNA NUEVA AFIRMACIÓN
	//PARA LAS PREGUNTAS DEL SEGUNDO TEST PARA ENVIAR AL MODELO CORRESPONDIENTE
	public function guardar_nueva_afirmacion_test()
	{
		$id_usuario = $this->session->userdata('user_id');
		$nom_pregunta = filter_var(strtolower($this->input->post('pregunta')), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$idarea_pregunta = $this->input->post('id_area');

		$obj = array(
			'nom_pregunta2' => $nom_pregunta,
			'idinteligencia' => $idarea_pregunta
		);
		$this->Modelo_configuracion->insertar_tabla_sys('preguntas2', $obj);
	}
	//RECUPERA LOS DATOS DE UNA DETERMINADA AFIRMACIÓN O PREGUNTAS DEL SEGUNDO TEST
	//PARA ENVIARA A UNA VENTANA PARA SU EDICIÓN

	public function editar_afirmacion_test($id)
	{

		$idpreguntas = $id;
		if ($idpreguntas) {
			$dato['obj'] = $this->Modelo_configuracion->tabla_row_sys('preguntas2', 'idpreguntas2', $idpreguntas);
			$dato['menu'] = $this->menu;
			$dato['menu_a'] = '20';
			$dato["contenido"] = "admin_inte/editar_afirmacion_test";
			$this->load->view('plantilla', $dato);
			
		} else {
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	//GUARDA LOS DATOS DE LA AFIRMACION DEL SEGUNDO TEST PARA SU ACTUALIZACION 
	//MEDIANTE UN MODELO
	public function guardar_editar_afirmacion_test()
	{
		$id_usuario = $this->session->userdata('user_id');
		$nom_pregunta = filter_var(strtolower($this->input->post('pregunta')), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$idarea_pregunta = $this->input->post('id_area');
		$idpregunta = $this->input->post('id');
		$obj = array(
			'nom_pregunta2' => $nom_pregunta,
			'idinteligencia' => $idarea_pregunta
		);
		$this->Modelo_configuracion->editar_tabla_sys('preguntas2', $obj, 'idpreguntas2', $idpregunta);
	}
	//REALIZA EL ELIMINADO LOGICO DE UNA DETERMINADA AFIRMACION(PREGUNTA DEL SEGUNDO TEST)
	public function eliminar_afirmacion_test()
	{
		$id = $this->input->post('idpreguntas2');
		$estado = 0;
		$obj = array(
			'estado' => $estado
		);
		$this->Modelo_configuracion->editar_tabla_sys('preguntas2', $obj, 'idpreguntas2', $id);
	}

//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
//TIPOS DE INTELIGENCIA
//MUESTRA LOS TIPOS DE INTELIGENCIA ACTIVOS PARA SU ADMINISTRACIÓN
	public function mostrar_tipos_inteligencia()
	{
		if ($this->menu['convocatoriasComunicados'] == 'convocatoriasComunicados') {
			$dato['menu'] = $this->menu;
			$dato['menu_a'] = '20';
			$dato['contenido'] = "admin_inte/admin_tipo_int";
			$this->load->view("plantilla", $dato);
		} else {
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// 	//             FIN MODULOS DEL SEGUNDO TEST DE INTELIGENCIA
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

	







//****************************************************************/
//ADMINISTRACION DE LAS PREGUNTAS DEL TEST INTERES (TERCER TEST)//
//****************************************************************/
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//%%%%%%%%%%%%%%%%% PREGUNTAS DE AREA DE INTERES
//MUESTRA LAS PREGUNTAS DEL TERCER TEST DE INTERES PROFESIONAL PARA SU ADMINISTRACIÓN
public function mostrar_test_interes()
	{
		if ($this->menu['convocatoriasComunicados'] == 'convocatoriasComunicados') {
			$dato['menu'] = $this->menu;
			$dato['menu_a'] = '20';
			$dato['contenido'] = "admin_inte_prof/admin_test_interes";
			$this->load->view("plantilla", $dato);
		} else {
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
//NUEVA ACTIVIDAD(PREGUNTAS DEL TERCER TEST) REENVIA A UN FORMULARIO PARA UNA NUEVA PREGUNTA
	public function nueva_actividad()
	{
		if ($this->menu['convocatoriasComunicados'] == 'convocatoriasComunicados') {
			$dato['menu'] = $this->menu;
			$dato['menu_a'] = '20';
			$dato['contenido'] = "admin_inte_prof/nueva_actividad";
			$this->load->view("plantilla", $dato);
		} else {
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}

	public function guardar_nueva_actividad_test()
	{
		$id_usuario = $this->session->userdata('user_id');
		$nom_pregunta = mb_strtoupper($this->input->post('pregunta'));
		$idarea_pregunta = $this->input->post('id_area');

		$obj = array(
			'nom_pregunta3' => $nom_pregunta,
			'idinteres' => $idarea_pregunta
		);
		$this->Modelo_configuracion->insertar_tabla_sys('preguntas3', $obj);
	}




	//mostrar area
	public function mostrar_area_interes(){
		if ($this->menu['convocatoriasComunicados']=='convocatoriasComunicados') {
			$dato['menu']=$this->menu;
			$dato['menu_a']='20';
			$dato['contenido']="admin_inte_prof/admin_area_interes";
			$this->load->view("plantilla",$dato);
		}else{
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	public function mostrar_resultado_interes(){
		if ($this->menu['convocatoriasComunicados']=='convocatoriasComunicados') {
			$dato['menu']=$this->menu;
			$dato['menu_a']='20';
			$dato['contenido']="admin_inte_prof/admin_resultado_interes";
			$this->load->view("plantilla",$dato);
		}else{
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	public function nueva_area_interes()
	{
		if ($this->menu['convocatoriasComunicados'] == 'convocatoriasComunicados') {
			$dato['menu'] = $this->menu;
			$dato['menu_a'] = '20';
			$dato['contenido'] = "admin_inte_prof/nueva_area_interes";
			$this->load->view("plantilla", $dato);
		} else {
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	public function guardar_nueva_area_interes()
	{
		$id_usuario = $this->session->userdata('user_id');
		$area = mb_strtoupper($this->input->post('area'));
		$actividad = mb_strtoupper($this->input->post('actividad'));

		
		
		$obj = array(
			'nombre_interes' => $area,
			'campos' => $actividad,
			'estado' => 1
		);
		$this->Modelo_configuracion->insertar_tabla_sys('area_interes', $obj);
	}
	public function editar_area_interes($id)
	{
		$idarea = $id;
		if ($idarea) {
			$dato['obj'] = $this->Modelo_configuracion->tabla_row_sys('area_interes', 'idinteres', $idarea);
			$dato['menu'] = $this->menu;
			$dato['menu_a'] = '20';
			$dato["contenido"] = "admin_inte_prof/editar_area_interes";
			$this->load->view('plantilla', $dato);
			# code...
		} else {
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}

	public function guardar_area_interes_editado()
	{
		$id_usuario = $this->session->userdata('user_id');
		$area = filter_var(strtolower($this->input->post('area')), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$carrera = filter_var(strtolower($this->input->post('carrera')), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$idarea = $this->input->post('id');


		$obj = array(
			'nombre_interes' => $area,
			'campos' => $carrera
		);

		$this->Modelo_configuracion->editar_tabla_sys('area_interes', $obj, 'idinteres', $idarea);
	}

	public function eliminar_area_interes(){
		$id=$this->input->post('idinteres');
		$estado=0;
		$obj=array(
			'estado'=>$estado			
		);
		$this->Modelo_configuracion->editar_tabla_sys('area_interes',$obj,'idinteres',$id);
	}

	//nueva interes 

	
	public function editar_pregunta_interes($id)
	{	$idpreguntas = $id;
		if ($idpreguntas) {
			$dato['obj'] = $this->Modelo_configuracion->tabla_row_sys('preguntas3', 'idpreguntas3', $idpreguntas);
			$dato['menu'] = $this->menu;
			$dato['menu_a'] = '20';
			$dato["contenido"] = "admin_inte_prof/editar_pregunta_interes";
			$this->load->view('plantilla', $dato);
			# code...
		} else {
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}









	///////////////RUTA NUEVO COLEGIO/////////////////////////////
	public function nuevo_colegio(){
		if ($this->menu['visitas']=='visitas') {
			$dato['menu']=$this->menu;
			$dato['menu_a']='10';
			$dato['contenido']="vista_estudiante/V_inscripcion_colegio";
			$this->load->view("plantilla",$dato);
		}else{
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	// modulo de visitas
		public function visitas(){
			if ($this->menu['visitas']=='visitas') {
				$dato['menu']=$this->menu;
				$dato['menu_a']='10';
				$dato['contenido']="vista_administracion/file_visitas/visitas";
				$this->load->view("plantilla",$dato);
			}else{
				redirect(base_url(Hasher::make(1)), 'refresh');
			}
		}
	// modulo de visitas
	//modulo de inscripciones rodry





		public function buscar_datos_existente(){
			$codigo=$this->input->post("codigo");
			$obj=$this->Modelo_administracion->buscar_datos_existente($codigo);
			
			$obj1=$this->Modelo_administracion->prof_persona_est($codigo);
			$obj2=$this->Modelo_administracion->prof_persona_simbolo($codigo);
			if($obj){
				
				$data=array(
					'0'=>'persona_paginas_webs',
					'1'=>$obj->per_ci,
					'2'=>$obj->per_dpto,
					'3'=>$obj->per_nombre,
					'4'=>$obj->per_paterno,
					'5'=>$obj->per_materno,
					'6'=>$obj->per_celular,
					'7'=>$obj->per_correo,
					'8'=>'persona',
					'9'=>$obj->per_ru,
					'10'=>$obj->idpersona,
					'11'=>$obj1->tipo_prof,
					'12'=>$obj2->tipo_simb
				);
			}else{
				$base_upeaobj=$this->Modelo_administracion->buscar_datos_exixtentes_base_upea($codigo);
				if($base_upeaobj){
					$data=array(
						'0'=>'persona_base_upea',
						'1'=>$base_upeaobj->ci,
						'2'=>$base_upeaobj->expedido,
						'3'=>$base_upeaobj->nombre,
						'4'=>$base_upeaobj->paterno,
						'5'=>$base_upeaobj->materno
					);
				}else{
					$data = array(0=>'noexiste');
				}
			}

			echo json_encode($data);
		}





	//para la creacion de grupo
	public function lista_vcf($id_curso){
$grupo=$this->Modelo_administracion->lista_inscritos($id_curso);
$curso=$this->Modelo_administracion->nombre_curso($id_curso);
header('Cache-Control: public');
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename=ParaWhatsapGrupo '.$curso->cursos.'.vcf');
header('Content-Type: text/x-vcard');
// $str='BEGIN:VCARD';
// $str.='';
foreach($grupo as $es){
$str.='
BEGIN:VCARD 
VERSION:3.0
REV:2021-03-01T07:27:56Z
N;CHARSET=utf-8:'.$curso->cursos.' '.$es->per_paterno.' '.$es->per_materno.' '.$es->per_nombre.'
FN;CHARSET=utf-8:'.$curso->cursos.' '.$es->per_paterno.' '.$es->per_materno.' '.$es->per_nombre.'
ORG:UPEA
TITLE:GRUPO
TEL:'.$es->per_celular.'
ADR:970 Princee St. Piqua, OH 45356 
END:VCARD';
}
echo $str;
}
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// 	//                              modulo de test ESTUDIANTES
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
public function mostrar_estudiantes(){
	if ($this->menu['convocatoriasComunicados']=='convocatoriasComunicados') {
		$dato['menu']=$this->menu;
		$dato['menu_a']='20';
		$dato['contenido']="admin_est/admin_estudiante";
		$this->load->view("plantilla",$dato);
	}else{
		redirect(base_url(Hasher::make(1)), 'refresh');
	}
}
public function menu_reportes(){
	if ($this->menu['adminCursos']=='adminCursos') {
		$dato['menu']=$this->menu;
		$dato['menu_a']='30';
		$dato['contenido']="admin_est/menu_test";
		$this->load->view("plantilla",$dato);
	}else{
		redirect(base_url(Hasher::make(1)), 'refresh');
	}
}
public function menu_informacion(){
	if ($this->menu['adminCursos']=='adminCursos') {
		$dato['menu']=$this->menu;
		$dato['menu_a']='30';
		$dato['contenido']="admin_est/menu_informacion";
		$this->load->view("plantilla",$dato);
	}else{
		redirect(base_url(Hasher::make(1)), 'refresh');
	}
}
public function menu_colegios(){
	if ($this->menu['adminCursos']=='adminCursos') {
		$dato['menu']=$this->menu;
		$dato['menu_a']='30';
		$dato['contenido']="admin_est/menu_colegios";
		$this->load->view("plantilla",$dato);
	}else{
		redirect(base_url(Hasher::make(1)), 'refresh');
	}
}

public function editar_colegio($id){	
	
	$idcolegio=$id; 
	if ( $idcolegio)  {
		$dato['obj']=$this->Modelo_configuracion->tabla_row_sys('colegio','id_colegio',$idcolegio);
		$dato['mun']=$this->Modelo_configuracion->tabla_query('municipio');
		$dato['objmun']=$this->Modelo_configuracion->tabla_query('colegio_municipio');
		$dato['menu']=$this->menu;
		$dato['menu_a']='20';
		$dato["contenido"] = "admin_test/editar_colegio";
		$this->load->view('plantilla', $dato);
		# code...
	}else{
		redirect(base_url(Hasher::make(1)), 'refresh');
	}
}

public function menu_pdf1(){
	if ($this->menu['adminCursos']=='adminCursos') {
		
		$dato['menu']=$this->menu;
		$dato['menu_a']='30';
		$dato['contenido']="admin_est/reportes1";
		$this->load->view("plantilla",$dato);
	}else{
		redirect(base_url(Hasher::make(1)), 'refresh');
	}
}
public function menu_pdf2(){
	if ($this->menu['adminCursos']=='adminCursos') {
		
		$dato['menu']=$this->menu;
		$dato['menu_a']='30';
		$dato['contenido']="admin_est/reportes2";
		$this->load->view("plantilla",$dato);
	}else{
		redirect(base_url(Hasher::make(1)), 'refresh');
	}
}
public function menu_pdf3(){
	if ($this->menu['adminCursos']=='adminCursos') {
		
		$dato['menu']=$this->menu;
		$dato['menu_a']='30';
		$dato['contenido']="admin_est/reportes3";
		$this->load->view("plantilla",$dato);
	}else{
		redirect(base_url(Hasher::make(1)), 'refresh');
	}
}
public function menu_pdf4(){
	if ($this->menu['adminCursos']=='adminCursos') {
		
		$dato['menu']=$this->menu;
		$dato['menu_a']='30';
		$dato['contenido']="admin_est/reportes4";
		$this->load->view("plantilla",$dato);
	}else{
		redirect(base_url(Hasher::make(1)), 'refresh');
	}
}




	///////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////////////////////////////
	////                   TEST DE INTERES  ////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////
	
	public function guardar_actividades_editado()
	{
		$id_usuario = $this->session->userdata('user_id');
		$nom_pregunta = mb_strtoupper($this->input->post('pregunta'));
		$idarea_pregunta = $this->input->post('id_area');
		$idpregunta = $this->input->post('id');
        
		

		$obj = array(
			'nom_pregunta3' => $nom_pregunta,
			'idinteres' => $idarea_pregunta
		);
		$this->Modelo_configuracion->editar_tabla_sys('preguntas3', $obj, 'idpreguntas3', $idpregunta);
	}

	public function eliminar_actividad_test(){
		$id=$this->input->post('idpreguntas3');
		$estado=0;
		$obj=array(
			'estado'=>$estado			
		);
		$this->Modelo_configuracion->editar_tabla_sys('preguntas3',$obj,'idpreguntas3',$id);
	}

	public function editar_acceso($id){	
	
		$idpreguntas=$id; 
		if ( $idpreguntas)  {
			$dato['obj']=$this->Modelo_configuracion->tabla_row_sys('accesos','id_acceso',$idpreguntas);
			$dato['menu']=$this->menu;
			$dato['menu_a']='20';
			$dato["contenido"] = "admin_test/editar_acceso";
			$this->load->view('plantilla', $dato);
			# code...
		}else{
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	public function guardar_editar_acceso(){
		$id_usuario=$this->session->userdata('user_id');

		$tipo=$this->input->post('tipo');
		$descripcion=$this->input->post('descripcion');
		$link=$this->input->post('link');
		
		$idpregunta=$this->input->post('id');

		
		$obj=array(
			'nombre_acceso'=>$tipo,
			'acceso'=>$link,
			'descripcion'=>$descripcion			
		);
		$this->Modelo_configuracion->editar_tabla_sys('accesos',$obj,'id_acceso',$idpregunta);
	}
	






	//// NUEVO TEST DAT 
	//modulo de Admin DAT JUANPA
	public function adminTestDAT(){
		if ($this->menu['convocatoriasComunicados']=='convocatoriasComunicados') {
			$dato['menu']=$this->menu;
			$dato['menu_a']='20';
			$dato['contenido']="vista_administracion/file_AdminTestDAT/admin_test";
			$this->load->view("plantilla",$dato);
		}else{
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	//para crear nuevo TEST DAT JUANPA
	public function crearNuevoTestDAT($val){
		if ($this->menu['convocatoriasComunicados']=='convocatoriasComunicados') {
			$dato['id_test']=$this->db->query("SELECT * FROM dat_tipo WHERE id_dat_tipo='$val'")->row();
			// $dato['base_upea']=$this->Modelo_administracion->listar_base();
			$dato['menu']=$this->menu;
			$dato['menu_a']='20';
			$dato['contenido']="vista_administracion/file_AdminTestDAT/crear_nuevo_test";
			$this->load->view("plantilla",$dato);
		}else{
			redirect(base_url(Hasher::make(1)), 'refresh');
		}
	}
	//lista detalles del TEST seleccionado
	public function detallesTest($id){
		if ($this->menu['convocatoriasComunicados']=='convocatoriasComunicados') {
			$dato['consulta']=$this->db->query("SELECT * FROM dat_tipo WHERE id_dat_tipo='$id'")->row();
			$dato['menu']=$this->menu;
			$dato['menu_a']='20';
			$dato['contenido']="vista_administracion/file_AdminTestDAT/detallesTest";
			$this->load->view("plantilla",$dato);
		}else{
			redirect(base_url(Hasher::make(1)), 'refresh');
		}

	}
	//para editar pregunta
	public function editarpregunta(){
		$id_test=$this->input->post("id");
		$dato['obj']=$this->Modelo_configuracion->tabla_row_sys('dat_test','id_test',$id_test);
		$this->load->view("vista_administracion/file_AdminTestDAT/editar_Test",$dato);
	}
	//para editar pregunta
	public function eliminarpregunta(){
		$id_test=$this->input->post('id_test');
		$obj=array(
			'estado'=>'ELIMINADO',
		);
		$this->Modelo_configuracion->editar_tabla_sys('dat_test',$obj,'id_test',$id_test);
	}
	//para editar pregunta
	public function agregarRespuestas(){
		$id_test=$this->input->post("id");
		$dato['obj']=$this->Modelo_configuracion->tabla_row_sys('dat_test','id_test',$id_test);
		$this->load->view("vista_administracion/file_AdminTestDAT/crear_nueva_respuesta",$dato);
	}
	//guardar el nuevo curso creado
	public function guardar_nuevo_pregunta(){
		$b_titulo=$this->input->post('b_titulo');
		$id_dat_tipo=$this->input->post('id_dat_tipo');
		
		$imagen=$_FILES['imagen']['tmp_name'];
		if ($imagen==null) {
			$imag='';
		}else{
			list($ancho,$alto)=getimagesize($_FILES['imagen']['tmp_name']);

			$image = getimagesize($imagen);    
			$ancho = $image[0];              
			$alto = $image[1];   

			$nuevo_ancho=$ancho;
			$nuevo_alto=$alto;

			// $nuevo_ancho=2000;
			// $nuevo_alto=1500;
			if ($_FILES['imagen']['type']=="image/jpg" || $_FILES['imagen']['type']=="image/jpeg") {
				$ima=round(microtime(true)).'.jpg';
				$ruta="assets/img_test/test_pregunta_".$ima;
				$origen=imagecreatefromjpeg($_FILES['imagen']['tmp_name']);
				$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino,$ruta);
				$imag="test_pregunta_".$ima;
			}else{
				if ($_FILES['imagen']['type']=="image/png") {
					$ima=round(microtime(true)).'.jpg';
					$ruta="assets/img_test/test_pregunta_".$ima;
					$origen=imagecreatefrompng($_FILES['imagen']['tmp_name']);
					$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino,$ruta);
					$imag="test_pregunta_".$ima;
				}else{
					if ($_FILES['imagen']['type']=="image/gif") {
						$ima=round(microtime(true)).'.jpg';
						$ruta="assets/img_test/test_pregunta_".$ima;
						$origen=imagecreatefromgif($_FILES['imagen']['tmp_name']);
						$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino,$ruta);
						$imag="test_pregunta_".$ima;
					}else{
						$imag='';
					}
				}
			}
		}
		$obj=array(
			'imagen'=>$imag,
			'pregunta'=>$b_titulo,
			'estado'=>'ACTIVO',
			'fecha_creado'=>date('Y-m-d H:i:s'),
			'fecha_actualizado'=>date('Y-m-d H:i:s'),
			'id_dat'=>$id_dat_tipo
		);
		$this->Modelo_configuracion->insertar_tabla_sys('dat_test',$obj);
	}
	//guardar el nuevo curso creado
	public function guardar_respuesta_dat(){
		$b_titulo=$this->input->post('b_titulo');
		$id_test=$this->input->post('id_test');
		
		$imagen=$_FILES['imagen']['tmp_name'];
		if ($imagen==null) {
			$imag=NULL;
		}else{
			list($ancho,$alto)=getimagesize($_FILES['imagen']['tmp_name']);

			$image = getimagesize($imagen);    
			$ancho = $image[0];              
			$alto = $image[1];   

			$nuevo_ancho=$ancho;
			$nuevo_alto=$alto;

			// $nuevo_ancho=2000;
			// $nuevo_alto=1500;
			if ($_FILES['imagen']['type']=="image/jpg" || $_FILES['imagen']['type']=="image/jpeg") {
				$ima=round(microtime(true)).'.jpg';
				$ruta="assets/img_test/respuestas/test_respuestas_".$ima;
				$origen=imagecreatefromjpeg($_FILES['imagen']['tmp_name']);
				$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino,$ruta);
				$imag="test_respuestas_".$ima;
			}else{
				if ($_FILES['imagen']['type']=="image/png") {
					$ima=round(microtime(true)).'.jpg';
					$ruta="assets/img_test/respuestas/test_respuestas_".$ima;
					$origen=imagecreatefrompng($_FILES['imagen']['tmp_name']);
					$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino,$ruta);
					$imag="test_respuestas_".$ima;
				}else{
					if ($_FILES['imagen']['type']=="image/gif") {
						$ima=round(microtime(true)).'.jpg';
						$ruta="assets/img_test/respuestas/test_respuestas_".$ima;
						$origen=imagecreatefromgif($_FILES['imagen']['tmp_name']);
						$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino,$ruta);
						$imag="test_respuestas_".$ima;
					}else{
						$imag='';
					}
				}
			}
		}
		$obj=array(
			'foto'=>$imag,
			'texto'=>$b_titulo,
			'estado'=>'ACTIVO',
			'valor'=>'0',
			'fecha_creado'=>date('Y-m-d H:i:s'),
			'fecha_actualizado'=>date('Y-m-d H:i:s'),
			'id_dat_test'=>$id_test
		);
		$this->Modelo_configuracion->insertar_tabla_sys('dat_pregunta',$obj);
	}
	public function guardar_editar_pregunta(){
		$id_test=$this->input->post('id_test');
		$det_img=$this->input->post('imagen');

		$b_titulo=$this->input->post('b_titulo');
		$id_dat=$this->input->post('id_dat');
		
		$imagen=$_FILES['imagen']['tmp_name'];
		if ($imagen==null) {
			$imag=$det_img;
		}else{
			list($ancho,$alto)=getimagesize($_FILES['imagen']['tmp_name']);

			$image = getimagesize($imagen);    
			$ancho = $image[0];              
			$alto = $image[1];   

			$nuevo_ancho=$ancho;
			$nuevo_alto=$alto;

			// $nuevo_ancho=2000;
			// $nuevo_alto=1500;
			if ($_FILES['imagen']['type']=="image/jpg" || $_FILES['imagen']['type']=="image/jpeg") {
				$ima=round(microtime(true)).'.jpg';
				$ruta="assets/img_test/test_pregunta_".$ima;
				$origen=imagecreatefromjpeg($_FILES['imagen']['tmp_name']);
				$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino,$ruta);
				$imag="test_pregunta_".$ima;
			}else{
				if ($_FILES['imagen']['type']=="image/png") {
					$ima=round(microtime(true)).'.jpg';
					$ruta="assets/img_test/test_pregunta_".$ima;
					$origen=imagecreatefrompng($_FILES['imagen']['tmp_name']);
					$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino,$ruta);
					$imag="test_pregunta_".$ima;
				}else{
					if ($_FILES['imagen']['type']=="image/gif") {
						$ima=round(microtime(true)).'.jpg';
						$ruta="assets/img_test/test_pregunta_".$ima;
						$origen=imagecreatefromgif($_FILES['imagen']['tmp_name']);
						$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino,$ruta);
						$imag="test_pregunta_".$ima;
					}else{
						$imag=$det_img_portada;
					}
				}
			}
		}
		$obj=array(
			'imagen'=>$imag,
			'pregunta'=>$b_titulo,
			'fecha_actualizado'=>date('Y-m-d H:i:s'),
			'id_dat'=>$id_dat
		);
		$this->Modelo_configuracion->editar_tabla_sys('dat_test',$obj,'id_test',$id_test);
	}
	//para el gurdado de la nueva TEST
	public function guardar_nueva_categoria_test(){
		$b_titulo=$this->input->post('b_titulo1');
		$tiempo=$this->input->post('tiempo');
		$instrucciones=$this->input->post('instrucciones');
		$cantidad_muestra=$this->input->post('cantidad_muestra');
		$id_dat_tipo=$this->input->post('id_dat_tipo');
		if ($id_dat_tipo==0) {
			$obj=array(
				'test'=>$b_titulo,
				'instrucciones'=>$instrucciones,
				'tiempo'=>$tiempo,
				'cantidad_muestra'=>$cantidad_muestra,
				'estado'=>'ACTIVO',
				'fecha_creado'=>date('Y-m-d H:i:s'),
				'fecha_actualizado'=>date('Y-m-d H:i:s'),
			);
			$this->Modelo_configuracion->insertar_tabla_sys('dat_tipo',$obj);
		}else{
			$obj=array(
				'test'=>$b_titulo,
				'instrucciones'=>$instrucciones,
				'tiempo'=>$tiempo,
				'cantidad_muestra'=>$cantidad_muestra,
				'fecha_actualizado'=>date('Y-m-d H:i:s'),
			);
			$this->Modelo_configuracion->editar_tabla_sys('dat_tipo',$obj,'id_dat_tipo',$id_dat_tipo);
		}
	}
	//para editar valor
	public function estado_datos_pregunta_valor(){
		$id_pregunta=$this->input->post('id_pregunta');
		$valor=$this->input->post('valor');
		if ($valor=='1') {
			$valor='0';
		}else{
			$valor='1';
		}
		$obj=array(
			'valor'=>$valor,
		);
		$this->Modelo_configuracion->editar_tabla_sys('dat_pregunta',$obj,'id_pregunta',$id_pregunta);
	}
	//para editar estado
	public function estado_datos_pregunta(){
		$id_test=$this->input->post('id_test');
		$estado=$this->input->post('estado');
		if ($estado=='1') {
			$estado='INACTIVO';
		}else{
			$estado='ACTIVO';
		}
		$obj=array(
			'estado'=>$estado,
		);
		$this->Modelo_configuracion->editar_tabla_sys('dat_test',$obj,'id_test',$id_test);
	}
	//para el estado
	public function estado_datos_categoria_test(){
		$id_usuario=$this->session->userdata('user_id');
		$id_dat_tipo=$this->input->post('id_dat_tipo');
		$estado=$this->input->post('estado');
		if ($estado=='1') {
			$estado='INACTIVO';
		}else{
			$estado='ACTIVO';
		}
		$obj=array('estado'=>$estado);
		$this->Modelo_configuracion->editar_tabla_sys('dat_tipo',$obj,'id_dat_tipo',$id_dat_tipo);
	}
	//buscar si existe
	public function buscar_exixte_dato(){
		$valor=$this->input->post("ingresado");
		$busqueda= $this->db->query("SELECT test FROM dat_tipo WHERE test like '$valor' ")->row();

		if($busqueda){
			$data= array(0 => 'existe');
		}else{
			$data= array(0 => 'puede');
		}
		echo json_encode($data);
	}
}