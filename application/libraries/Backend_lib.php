<?php

class Backend_lib{
	private $CI;
	public function __construct(){
		$this->CI = & get_instance();
	}

	public function control(){
		if (!$this->CI->session->userdata("is_logued_in")) {
			redirect(base_url());
		}
		$url = $this->CI->uri->segment(1);
		if ($this->CI->uri->segment(2)) {
			$url = $this->CI->uri->segment(1)."/".$this->CI->uri->segment(2);
		}
		// if ($this->CI->uri->segment(3)) {
		// 	$url = $this->CI->uri->segment(1)."/".$this->CI->uri->segment(2)."/".$this->CI->uri->segment(3);
		// }
		$obj = $this->CI->Backend_model->getID($url);
		if ($obj==null) {
			return false;
		}else{
			$permisos = $this->CI->Backend_model->getPermisos($obj->idtbl_menus,$this->CI->session->userdata("idtipo_usuario"));
			return $permisos;
			// if ($permisos==false) {
			// 	redirect(base_url().'Controller_sistema');
			// }else{
			// 	return $permisos;
			// }	
		}
	}
	public function lista_meus_sys(){
		return $this->CI->Backend_model->listar_menus_privilegios();
	}
}


