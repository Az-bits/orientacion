<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_resultado2 extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		$this->load->model('Modelo_resultado2');
		date_default_timezone_set('America/La_Paz');
		$this->load->helper('funciones_helper');
	}	
	public function index(){
		redirect(site_url(Hasher::make(1))); 
	}

    public function C_insert_resultado2($datos, $idest) {
    $datos = $this->input->post();
    if (isset($datos)){
        $nombre_est = $datos['nombre_est'];
        $nombre_intel = $datos['nombre_inteligencia'];
		for($i=0;$i<5;$i++){			
			$obj=array(
				'idestudiante'=>$idest,
				'nombre_est'=>$nombre_est,
				'inteligencia'=>$nombre_intel[$i]
			);
			$tabla="resultados2";

			$this->Modelo_resultado2->M_insert_resultado2($tabla,$obj);
		}//fin for
    }//fin if
    }//fin function

	public function V_admin_resultado2(){
		$dato['menu']="4";
		$dato['contenido']="vista_admin/V_admin_resultado2";
		$this->load->view('plantilla_a',$dato);
}
}