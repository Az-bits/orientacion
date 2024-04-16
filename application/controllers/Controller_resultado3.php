<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_resultado extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		$this->load->model('Modelo_resultado3');
		date_default_timezone_set('America/La_Paz');
		$this->load->helper('funciones_helper');
	}	
	public function index(){
		redirect(site_url(Hasher::make(1))); 
	}
	public function C_insert_resultado3($datos, $idest) {
    $datos = $this->input->post();
    if (isset($datos)){
        $nombre_est = $datos['nombre_est'];
        $nombre_area = $datos['nombre_area'];
		for($i=0;$i<2;$i++){			
			$obj=array(
				'idestudiante'=>$idest,
				'nombre_est'=>$nombre_est,
				'nombre_area'=>$nombre_area[$i]
			);
			$tabla="resultados3";

			$this->Modelo_resultado3->M_insert_resultado3($tabla,$obj);
		}//fin for
    }//fin if
    }//fin function
	public function V_admin_resultado(){
		$dato['menu']="3";
		$dato['contenido']="vista_admin/V_admin_resultado";
		$this->load->view('plantilla_a',$dato);
	}
}