<?php 
class Modelo_pagina extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/La_Paz');
		$this->load->helper('funciones_helper');
	}
	public function index()
	{
		redirect(base_url().'paginaInicio');
	}
	public function paginaInicio(){
		$dato['menu_a']='1';
		$dato['contenido']="vista_pagina/pagina_inicio";
		$this->load->view("plantilla_v",$dato);
	}
	public function paginaNoticia($id){
		$idtipo_noticias=decrypt_id($id); 
		if ( (preg_match("/^[0-9]+$/", $idtipo_noticias)))  {
			$dato['obj_listar']=$this->Modelo_pagina->paginaNoticia_id($idtipo_noticias);
			$dato['menu_a']='2';
			$dato['idtipo_noticias']=$idtipo_noticias;
			$dato["contenido"] = "vista_pagina/pagina_noticia";
			$this->load->view('plantilla_v', $dato);
		}else{
			redirect(base_url().'paginaInicio');
		}
	}
	public function paginaContacto(){
		$dato['menu_a']='7';
		$dato['contenido']="vista_pagina/pagina_contacto";
		$this->load->view("plantilla_v",$dato);
	}


}