<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_pregunta extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		$this->load->model('Modelo_pregunta');
		date_default_timezone_set('America/La_Paz');
		$this->load->helper('funciones_helper');
	}	
	public function index(){
		echo "preguntas habiltar";
        //redirect(site_url(Hasher::make(1))); 
	}
	public function V_admin_pregunta(){
		$dato['menu_a']="10";
		$dato['contenido']="vista_administracion/V_admin_pregunta";
		$this->load->view('plantilla',$dato);
	}	
}