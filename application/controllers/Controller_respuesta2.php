<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_respuesta2 extends CI_Controller {
	public function __construct()	{
		parent::__construct();
		$this->load->model('Modelo_respuesta2');
		$this->load->model('Modelo_resultado2');
	}
	public function index()
	{ 
		redirect('C_insertar_respuesta2'); 
	}
    public function C_insertar_respuesta2() {
	
    $datos = $this->input->post();
    if (isset($datos)){
        $idest = $datos['idest'];
        $idpreg = $datos['idpreg'];///array()
	       //$respuesta = $datos['respuesta'];///array()
        if(count($idpreg) == 35||count($idpreg) != 35){
  			if(is_array($idpreg)){ 
			for($i=0;$i<count($idpreg);$i++){			
				$obj=array(
					'idestudiante'=>$idest,
					'idpreguntas2'=>$idpreg[$i],
					'est_respuesta2'=>$this->input->post('respuesta'.$idpreg[$i])
				);
				$tabla="respuestas2";

				$this->Modelo_respuesta2->insertar_tabla_sys2($tabla,$obj);
			}//fin for
			redirect(base_url(Hasher::make(258,$idest)));	
		} //fin if
        } else {
        	redirect(base_url(Hasher::make(244,$idest)));
        }	
    }//fin if
    }//fin function
}//fin class