<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_respuesta3 extends CI_Controller {
	public function __construct()	{
		parent::__construct();
		$this->load->model('Modelo_respuesta3');
		$this->load->model('Modelo_resultado3');
	}
	public function index()
	{ 
		redirect('C_insertar_respuesta3'); 
	}
    public function C_insertar_respuesta3() {
	
    $datos = $this->input->post();
    if (isset($datos)){
        $idest = $datos['idest'];
        $idpreg = $datos['idpreg'];///array()
	       //$respuesta = $datos['respuesta'];///array()
        if(count($idpreg) == 60||count($idpreg) != 60){
  			if(is_array($idpreg)){ 
			for($i=0;$i<count($idpreg);$i++){			
				$obj=array(
					'idestudiante'=>$idest,
					'idpreguntas3'=>$idpreg[$i],
					'est_respuesta3'=>$this->input->post('respuesta'.$idpreg[$i]),
					'estado'=>1
				);
				$tabla="respuestas3";

				$this->Modelo_respuesta3->insertar_tabla_sys3($tabla,$obj);
			}//fin for
			redirect(base_url(Hasher::make(14,$idest)));	
		} //fin if
        } else {
        	redirect(base_url(Hasher::make(255,$idest)));
        }	
    }//fin if
    }//fin function
}//fin class