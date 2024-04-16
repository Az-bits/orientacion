<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_sistema extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		// $this->load->model('Modelo_usuario');
		$this->load->model('Modelo_administracion');
		$this->load->model('Modelo_configuracion');
		$this->load->model('Backend_model');
		
		if (!$this->session->userdata('is_logued_in')) {
			redirect(base_url().'login','refresh');
		}
		date_default_timezone_set('America/La_Paz');

		$this->menu = $this->Backend_model->listar_menus_privilegios();
	}
	public function index()
	{
		redirect(base_url().'inicio');
	}
	public function inicio(){
		
		$dato['menu']=$this->menu;
		$dato['menu_a']='1';
		$dato['contenido']="vista_usuario/inicio";
		$this->load->view("plantilla",$dato);
	}
	public function inicio2(){
		//$dato['menu']=$this->menu;
		$dato['menu_a']='1';
		$dato['contenido']="vista_usuario/inicio";
		$this->load->view("plantilla",$dato);
	}
	public function perfil(){
		
		$dato['menu']=$this->menu;
		$dato['menu_a']='1';
		$dato['contenido']="vista_usuario/perfil";
		$this->load->View("plantilla",$dato);
	}
	public function guardar_img_perfil(){
		$id_usuario=$this->session->userdata('user_id');
        $imagen_a=$this->input->post('imagen_user');
        
        $imagen=$_FILES['imagen']['tmp_name'];
		if ($imagen==null) {
			$imag=$imagen_a;
		}else{
			if ($imagen_a) { unlink("./assets/img_perfil/".$imagen_a);}
			list($ancho,$alto)=getimagesize($_FILES['imagen']['tmp_name']);
			$nuevo_ancho=200;
			$nuevo_alto=200;
			if ($_FILES['imagen']['type']=="image/jpg" || $_FILES['imagen']['type']=="image/jpeg") {
				$ima=round(microtime(true)).'.jpg';
				$ruta="assets/img_perfil/user_".$ima;
				$origen=imagecreatefromjpeg($_FILES['imagen']['tmp_name']);
				$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino,$ruta);
				$imag="user_".$ima;
			}else{
				if ($_FILES['imagen']['type']=="image/png") {
					$ima=round(microtime(true)).'.jpg';
					$ruta="assets/img_perfil/user_".$ima;
					$origen=imagecreatefrompng($_FILES['imagen']['tmp_name']);
					$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino,$ruta);
					$imag="user_".$ima;
				}else{
					if ($_FILES['imagen']['type']=="image/gif") {
						$ima=round(microtime(true)).'.jpg';
						$ruta="assets/img_perfil/user_".$ima;
						$origen=imagecreatefromgif($_FILES['imagen']['tmp_name']);
						$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino,$ruta);
						$imag="user_".$ima;
					}else{
						$imag='';
					}
				}
			}
		}
        $obj=array('imagen'=>$imag );
		$this->Modelo_configuracion->editar_tabla_sys('users',$obj,'id',$id_usuario);
	}
	public function guardar_seguridad(){
		$id_usuario=$this->session->userdata('user_id');
		$usuario=$this->input->post("usu");
		$pass=$this->input->post("pas");
		$this->ion_auth->guardar_seguridad($id_usuario,$usuario,$pass);
	}












	
	//modulo de usuario

		public function admin_usuarios(){
			if ($this->menu['admin_usuarios']=='admin_usuarios') {
				$dato['menu']=$this->menu;
				$dato['menu_a']='2';
				$dato['contenido']="vista_usuario/file_usuario/admin_usuarios";
				$this->load->view("plantilla",$dato);
			}else{
				redirect(base_url().'inicio');
			}
		}
		public function mostrar_autocompletar($texto){
			$variable=$this->Modelo_configuracion->mostrar_autocompletar($texto);
			$res = array();
			foreach ($variable as $obj) {
				array_push($res, $obj->codigo);
			}
			echo json_encode($res);
		}
		public function buscar_datos_existente(){
			$codigo=$this->input->post("codigo");
			$obj1=$this->Modelo_configuracion->buscar_datos_existente($codigo);
			if ($obj1) {
				$res1=array(
					'0'=>$obj1->codigo,
					'1'=>$obj1->first_name,
					'2'=>$obj1->last_name,
					'3'=>$obj1->imagen,
					'4'=>$obj1->username,
					'5'=>'users',
				);
				echo json_encode($res1);
			}else{
				echo json_encode(array(0 => 0));
			}
		}
		public function guardar_nuevo_usuario(){
			$id_usuario=$this->session->userdata('user_id');
	        $codigo=$this->input->post('codigo');
	        $nombre=mb_strtoupper($this->input->post('nombre'),'utf-8');
	        $apellido=mb_strtoupper($this->input->post('apellido'),'utf-8');
	        $id_rol=$this->input->post('id_rol');
	        $usu=$this->input->post('usu');
	        $pas=$this->input->post('pas');


	        $imagen=$_FILES['imagen']['tmp_name'];
			if ($imagen==null) {
				$imag='';
			}else{
				list($ancho,$alto)=getimagesize($_FILES['imagen']['tmp_name']);
				$nuevo_ancho=200;
				$nuevo_alto=200;
				if ($_FILES['imagen']['type']=="image/jpg" || $_FILES['imagen']['type']=="image/jpeg") {
					$ima=round(microtime(true)).'.jpg';
					$ruta="assets/img_perfil/user_".$ima;
					$origen=imagecreatefromjpeg($_FILES['imagen']['tmp_name']);
					$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagejpeg($destino,$ruta);
					$imag="user_".$ima;
				}else{
					if ($_FILES['imagen']['type']=="image/png") {
						$ima=round(microtime(true)).'.jpg';
						$ruta="assets/img_perfil/user_".$ima;
						$origen=imagecreatefrompng($_FILES['imagen']['tmp_name']);
						$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagepng($destino,$ruta);
						$imag="user_".$ima;
					}else{
						if ($_FILES['imagen']['type']=="image/gif") {
							$ima=round(microtime(true)).'.jpg';
							$ruta="assets/img_perfil/user_".$ima;
							$origen=imagecreatefromgif($_FILES['imagen']['tmp_name']);
							$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
							imagegif($destino,$ruta);
							$imag="user_".$ima;
						}else{
							$imag='';
						}
					}
				}
			}

			$this->ion_auth->guardar_nuevo_usuario($imag,$codigo,$nombre,$apellido,$id_rol,$usu,$pas);
			echo '<h1><i style="font-size:100px;" class="fa fa-check-square-o"></i></h1>
			<p>:::EXITOSAMENTE GUARDADO LOS DATOS:::</p>';	
			exit();	
		}
		public function validar_usuario_existente(){
			$usuario=$this->input->post("usuario");	
			$fer=$this->Modelo_configuracion->validar_usuario_existente($usuario);
			if ($fer==1) {
				echo 1;
			}else{
				echo 0;
			}
		}
		public function cambiar_estado(){
			$id_user=$this->input->post("id_user");
			$estado=$this->input->post("estado");
			if ($estado==1) {
				$estado=0;
			}else{
				$estado=1;
			}
			$obj=array('active'=>$estado);
			$this->Modelo_configuracion->editar_tabla_sys('users',$obj,'id',$id_user);
		}
		public function cambiar_estado_col(){
			$id_colegio=$this->input->post("id_colegio");
			$estado=$this->input->post("estado");
			if ($estado=='ACTIVO') {
				$estado='INACTIVO';
			}else{
				$estado='ACTIVO';
			}
			$obj=array('estado_colegio'=>$estado);
			$this->Modelo_configuracion->editar_tabla_sys('colegio',$obj,'id_colegio',$id_colegio);
		}
		public function reset_estado(){
			$id_user=$this->input->post("id_user");
			$dato['obj']=$this->Modelo_configuracion->reset_estado_user_id($id_user);
			$this->load->view("vista_usuario/file_usuario/reset_estado",$dato);
		}
		public function guardar_reset_usuario(){
			$id_user=$this->input->post("id_user");
			$usuario=$this->input->post("usuario");
			$pass=$this->input->post("pass");
			$this->ion_auth->guardar_reset_usuario($id_user,$usuario,$pass);
		}
		public function editar_usuario(){
			$id_user=$this->input->post("id_user");
			$dato['obj']=$this->Modelo_configuracion->reset_estado_user_id($id_user);
			$this->load->view("vista_usuario/file_usuario/editar_usuario",$dato);
		}
		public function guardar_editar_usuario(){
			$id_usuario=$this->session->userdata('user_id');
	        $id_user=$this->input->post('id_user');
	        $id_grupo=$this->input->post('id_grupo');
	        $imagen_a=$this->input->post('imagen_a');

	        $codigo=$this->input->post('codigo');
	        $nombre=mb_strtoupper($this->input->post('nombre'),'utf-8');
	        $apellido=mb_strtoupper($this->input->post('apellido'),'utf-8');
	        $id_rol=$this->input->post('id_rol');
	        
	        $imagen=$_FILES['imagen']['tmp_name'];
			if ($imagen==null) {
				$imag=$imagen_a;
			}else{
				if ($imagen_a) {
					unlink("./assets/img_perfil/".$imagen_a);
				}
				list($ancho,$alto)=getimagesize($_FILES['imagen']['tmp_name']);
				$nuevo_ancho=200;
				$nuevo_alto=200;
				if ($_FILES['imagen']['type']=="image/jpg" || $_FILES['imagen']['type']=="image/jpeg") {
					$ima=round(microtime(true)).'.jpg';
					$ruta="assets/img_perfil/user_".$ima;
					$origen=imagecreatefromjpeg($_FILES['imagen']['tmp_name']);
					$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagejpeg($destino,$ruta);
					$imag="user_".$ima;
				}else{
					if ($_FILES['imagen']['type']=="image/png") {
						$ima=round(microtime(true)).'.jpg';
						$ruta="assets/img_perfil/user_".$ima;
						$origen=imagecreatefrompng($_FILES['imagen']['tmp_name']);
						$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagepng($destino,$ruta);
						$imag="user_".$ima;
					}else{
						if ($_FILES['imagen']['type']=="image/gif") {
							$ima=round(microtime(true)).'.jpg';
							$ruta="assets/img_perfil/user_".$ima;
							$origen=imagecreatefromgif($_FILES['imagen']['tmp_name']);
							$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
							imagegif($destino,$ruta);
							$imag="user_".$ima;
						}else{
							$imag='';
						}
					}
				}
			}

	        $obj=array(
	        	'first_name'=>$nombre,
	        	'last_name'=>$apellido,
	        	'imagen'=>$imag
	        );
			$this->Modelo_configuracion->editar_tabla_sys('users',$obj,'id',$id_user);

			$obj1=array(
	        	'group_id'=>$id_rol
	        );
			$this->Modelo_configuracion->editar_tabla_sys('users_groups',$obj1,'id',$id_grupo);
			echo '<h1><i style="font-size:100px;" class="fa fa-check-square-o"></i></h1>
			<p>:::EXITOSAMENTE GUARDADO LOS DATOS:::</p>';	
			exit();	
		}
























		public function privilegios(){
			if ($this->menu['privilegios']=='privilegios') {
				$dato['menu']=$this->menu;
				$dato['menu_a']='2';
				$dato['contenido']="vista_usuario/file_privilegio/privilegios";
				$this->load->view("plantilla",$dato);
			}else{
				redirect(base_url().'inicio');
			}
		}
		public function listar_privilegios(){
			foreach ($this->db->query("SELECT * from groups")->result() as $tp) { 
	      echo '<h5 align="left">'.$tp->description.' (" '.$tp->name.'")</h5>
	        <table class=" table-striped" style=" width:100%;" >
	          <thead>
	            <tr  style=" background:#0384d8;color:#fff; box-shadow: 0px 5px 10px rgb(62, 66, 0);">
	              <th></th>
	              <th></th>
	              <th>NOMBRE MODULO</th>
	              <th>ESTADO</th>
	            </tr>
	          </thead>
	          <tbody>';
	          $con=1;
	          foreach ($this->Modelo_configuracion->listar_privilegios($tp->id) as $obj) {
	            if ($obj->privi_estado=='activo') {
	              echo '<tr>
	              <td>'.$con++.'</td> 
	              <th scope="row">
	                <button class="btn-primary"  onclick="cambiar_eliminar_privilegios('.$obj->idprivilegios.')"><i class="fa fa-trash"></i></button>';
	                if ($obj->privi_estado=='activo') { 
	                  $estado=1;
	                    echo '<button class="btn-primary" onclick="cambiar_estado_privilegios('.$obj->idprivilegios.','.$estado.')"><i class="fa fa-power-off"></i></button>';
	                  }else{ 
	                    $estado=0;
	                    echo '<button class=" btn-danger" onclick="cambiar_estado_privilegios('.$obj->idprivilegios.','.$estado.')"><i class="fa fa-power-off"></i></button>';                  
	                  }
	              echo '</th>
	              <td><i aria-hidden="true" class="fa fa-check-square-o"></i> '.strtoupper($obj->tabl_descripcion).'</td>
	         
	              <td>'; 
	                if ($obj->privi_estado=='activo') { 
	                    echo '<span class="badge badge-success shadow-success m-1">activo</span>';
	                  }else{ 
	                    echo '<span class="badge badge-danger shadow-success m-1">inactivo</span>';                  
	                  }
	              echo '</td>
	            </tr>';
	            }else{
	              echo '<tr>
	              <td>'.$con++.'</td> 
	                <th scope="row">
	                  <button class="btn-primary  "  onclick="cambiar_eliminar_privilegios('.$obj->idprivilegios.')"><i class="fa fa-trash"></i></button>';
	                  if ($obj->privi_estado=='activo') { 
	                    $estado=1;
	                      echo '<button class="btn-primary  " onclick="cambiar_estado_privilegios('.$obj->idprivilegios.','.$estado.')"><i class="fa fa-power-off"></i></button>';
	                    }else{ 
	                      $estado=0;
	                      echo '<button class="btn-danger  " onclick="cambiar_estado_privilegios('.$obj->idprivilegios.','.$estado.')"><i class="fa fa-power-off"></i></button>';                  
	                    }
	                echo '</th>
	                <td><i aria-hidden="true" class="fa fa-check-square-o"></i>  '.strtoupper($obj->tab_nombre).'</td>'; 
	                	
	                echo '<td>'; 
	                	if ($obj->privi_estado=='activo') { 
	                    	echo '<span class="badge badge-success shadow-success m-1">activo</span>';
	                  	}else{ 
	                    	echo '<span class="badge badge-danger shadow-success m-1">inactivo</span>';                  
	                    }
	                echo '</td>
	              </tr>';
	              }
	            }
	          echo '</tbody>
	        </table><hr>';
	        
	    }
		}
		public function verificar_menus(){
	      $id=$this->input->post("idtipo_usuario");
	      foreach ($this->db->query("SELECT * FROM tabla_menu ")->result() as $me) {
	      if($me->tabl_estado='activo'){
	        $ver=$this->Modelo_configuracion->veridicar_existente_privilegios($id,$me->idtabla_menu);
	        if ($ver==false) {
	              echo '<label><input type="checkbox" name="idtabla_menu[]" value="'.$me->idtabla_menu.'">  '.strtoupper('<u>'.$me->tabl_descripcion.'</u> ').'</label><br>';
	        }
	      } } 
	    }
	    public function guardar_privilegios(){
			$idtipo_usuario=$this->input->post('idtipo_usuario');
			$idtabla_menu=$this->input->post('idtabla_menu');//array
			if (!is_array($idtabla_menu)) {		 
				echo json_encode(array(0 => 0));
			}else{
				date_default_timezone_set('America/La_Paz');
				$fecha= date('Y-m-d');
				$estado="activo";
				$idusuario=$this->session->userdata('user_id');
				$this->Modelo_configuracion->guardar_privilegios($estado,$fecha,$idusuario,$idtipo_usuario,$idtabla_menu);
				echo json_encode(array(0 => 1));
			}
		}
		public function cambiar_eliminar_privilegios(){
			$id=$this->input->post('idprivilegios');
			$idtabla="idprivilegios";
			$tabla="privilegios";
			$this->Modelo_configuracion->eliminar_tabla_sys($tabla,$idtabla,$id);
		}
		public function cambiar_estado_privilegios(){
			$idprivilegios=$this->input->post('idprivilegios');
			if ($this->input->post('estado')==1) {
				$estado='inactivo';
			}else{
				$estado='activo';
			}
			$this->Modelo_configuracion->cambiar_estado_privilegios($idprivilegios,$estado);
		}





		public function guardar_modulos(){
			$id_usuario=$this->session->userdata('user_id');
			$nom_men=$this->input->post('nom_men');
			$nombre=$this->input->post('nombre');
			$link=$this->input->post('link');
			$estado='activo';
			$obj=array(
				'tab_nombre'=>$nombre,
				'tab_link_funcion'=>$link,
				'tabl_estado'=>'activo',
				'tabl_descripcion'=>$nom_men,
				'tabl_id_usuario'=>$id_usuario
			);
			$tabla='tabla_menu';
			$this->Modelo_configuracion->insertar_tabla_sys($tabla,$obj);
		}
		public function editar_menus(){
			$dato['obj']=$this->Modelo_configuracion->ver_id_menus($this->input->post('idtabla_menu'));
			$this->load->view("vista_usuario/file_privilegio/editar_menus",$dato);
		}
		public function guardar_editar_menu(){
			$id_usuario=$this->session->userdata('user_id');
			$id=$this->input->post('idtabla_menu');
			$nom_men=$this->input->post('nom_men1');
			$nombre=$this->input->post('nombre1');
			$link=$this->input->post('link1');
			$obj=array(
				'tab_nombre'=>$nombre,
				'tab_link_funcion'=>$link,
				'tabl_descripcion'=>$nom_men,
				'tabl_id_usuario'=>$id_usuario
			);
			$idtabla='idtabla_menu';
			$tabla='tabla_menu';
			$this->Modelo_configuracion->editar_tabla_sys($tabla,$obj,$idtabla,$id);
		}
		public function eliminar_menus(){
			$id=$this->input->post('idtabla_menu');
			$idtabla='idtabla_menu';
			$tabla='tabla_menu';
			$this->Modelo_configuracion->eliminar_tabla_sys($tabla,$idtabla,$id);
		}
		public function estado_m_menus(){
			$id=$this->input->post('idtabla_menu');
			$id_usuario=$this->session->userdata('user_id');
			$tbl_estado=$this->input->post('tabl_estado');
			if ($tbl_estado=='activo') {
				$estado='inactivo';
			}else{
				$estado='activo';
			}
			$obj=array(
				'tabl_estado'=>$estado,
				'tabl_id_usuario'=>$id_usuario
			);
			$idtabla='idtabla_menu';
			$tabla='tabla_menu';
			$this->Modelo_configuracion->editar_tabla_sys($tabla,$obj,$idtabla,$id);
		}





		public function institucion(){
			if ($this->menu['privilegios']=='privilegios') {
				$dato['menu']=$this->menu;
				$dato['menu_a']='4';
				$dato['contenido']="vista_usuario/institucion";
				$this->load->view("plantilla",$dato);
			}else{
				redirect(base_url().'inicio');
			}
		}
		public function guardar_institucion(){
			$id_usuario=$this->session->userdata('user_id');
	        $nombre=mb_strtoupper($this->input->post('nombre'),'utf-8');
	        $nombre_auto=mb_strtoupper($this->input->post('nombre_auto'),'utf-8');
	        $vicerrector=mb_strtoupper($this->input->post('nombre_vicerrector'),'utf-8');
	        $director_carrea=mb_strtoupper($this->input->post('nombre_dirrector_carrera'),'utf-8');
	        $ejecutivo_centro=mb_strtoupper($this->input->post('nombre_ejectutiva_carrera'),'utf-8');

	        $correo1=$this->input->post('correo1');
	        $correo2=$this->input->post('correo2');
	        $celular1=$this->input->post('celular1');
	        $celular2=$this->input->post('celular2');
	        $telefono1=$this->input->post('telefono1');
	        $telefono2=$this->input->post('telefono2');
	        $facebook=$this->input->post('facebook');
	        $twitter=$this->input->post('twitter');
	        $youtube=$this->input->post('youtube');
	        $direccion=$this->input->post('direccion');
	        $api_map=$this->input->post('api_map');
	        $mision=mb_strtoupper($this->input->post('mision'),'utf-8');
	        $vision=mb_strtoupper($this->input->post('vision'),'utf-8');

	        $idinstitucion=$this->input->post('idinstitucion');
	        $in_logo=$this->input->post('in_logo');


	        $in_foto_autoridad=$this->input->post('in_foto_autoridad');
	        $foto_vicerrector_anterior=$this->input->post('foto_vicerrector_anterior');
	        $foto_dirrector_anterior=$this->input->post('foto_dirrector_anterior');
	        $foto_ejecutivo_ant=$this->input->post('foto_ejecutivo_anterior');


	        $imagen=$_FILES['imagen']['tmp_name'];
			if ($imagen==null) {
				$imag=$in_logo;
			}else{
				if($in_logo){
					unlink("./assets/img_perfil/".$in_logo);
				}
				list($ancho,$alto)=getimagesize($_FILES['imagen']['tmp_name']);
				$nuevo_ancho=1000;
				$nuevo_alto=1000;
				if ($_FILES['imagen']['type']=="image/jpg" || $_FILES['imagen']['type']=="image/jpeg") {
					$ima=round(microtime(true)).'.jpg';
					$ruta="assets/img_perfil/inst_".$ima;
					$origen=imagecreatefromjpeg($_FILES['imagen']['tmp_name']);
					$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagejpeg($destino,$ruta);
					$imag="inst_".$ima;
				}else{
					if ($_FILES['imagen']['type']=="image/png") {
						$ima=round(microtime(true)).'.jpg';
						$ruta="assets/img_perfil/inst_".$ima;
						$origen=imagecreatefrompng($_FILES['imagen']['tmp_name']);
						$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagepng($destino,$ruta);
						$imag="inst_".$ima;
					}else{
						if ($_FILES['imagen']['type']=="image/gif") {
							$ima=round(microtime(true)).'.jpg';
							$ruta="assets/img_perfil/inst_".$ima;
							$origen=imagecreatefromgif($_FILES['imagen']['tmp_name']);
							$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
							imagegif($destino,$ruta);
							$imag="inst_".$ima;
						}else{
							$imag='';
						}
					}
				}
			}



			//rector
			$imagen=$_FILES['imagen_auto']['tmp_name'];
			if ($imagen==null) {
				$imag_auto=$in_foto_autoridad;
			}else{
				if($in_foto_autoridad){
					unlink("./assets/img_perfil/".$in_foto_autoridad);
				}
				list($ancho,$alto)=getimagesize($_FILES['imagen_auto']['tmp_name']);
				$nuevo_ancho=220;
				$nuevo_alto=250;
				if ($_FILES['imagen_auto']['type']=="image/jpg" || $_FILES['imagen_auto']['type']=="image/jpeg") {
					$ima=round(microtime(true)).'.jpg';
					$ruta="assets/img_perfil/inst_".$ima;
					$origen=imagecreatefromjpeg($_FILES['imagen_auto']['tmp_name']);
					$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagejpeg($destino,$ruta);
					$imag_auto="inst_".$ima;
				}else{
					if ($_FILES['imagen_auto']['type']=="image/png") {
						$ima=round(microtime(true)).'.jpg';
						$ruta="assets/img_perfil/inst_".$ima;
						$origen=imagecreatefrompng($_FILES['imagen_auto']['tmp_name']);
						$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagepng($destino,$ruta);
						$imag_auto="inst_".$ima;
					}else{
						if ($_FILES['imagen_auto']['type']=="image/gif") {
							$ima=round(microtime(true)).'.jpg';
							$ruta="assets/img_perfil/inst_".$ima;
							$origen=imagecreatefromgif($_FILES['imagen_auto']['tmp_name']);
							$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
							imagegif($destino,$ruta);
							$imag_auto="inst_".$ima;
						}else{
							$imag_auto='';
						}
					}
				}
			}



			//vicerrector
			$imagen=$_FILES['imagen_vicerrector_nuevo']['tmp_name'];
			if ($imagen==null) {
				$imag_vicerrector=$foto_vicerrector_anterior;
			}else{
				if($foto_vicerrector_anterior){
					unlink("./assets/img_perfil/".$foto_vicerrector_anterior);
				}
				list($ancho,$alto)=getimagesize($_FILES['imagen_vicerrector_nuevo']['tmp_name']);
				$nuevo_ancho=220;
				$nuevo_alto=250;
				if ($_FILES['imagen_vicerrector_nuevo']['type']=="image/jpg" || $_FILES['imagen_vicerrector_nuevo']['type']=="image/jpeg") {
					$ima=round(microtime(true)).'.jpg';
					$ruta="assets/img_perfil/inst_".$ima;
					$origen=imagecreatefromjpeg($_FILES['imagen_vicerrector_nuevo']['tmp_name']);
					$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagejpeg($destino,$ruta);
					$imag_vicerrector="inst_".$ima;
				}else{
					if ($_FILES['imagen_vicerrector_nuevo']['type']=="image/png") {
						$ima=round(microtime(true)).'.jpg';
						$ruta="assets/img_perfil/inst_".$ima;
						$origen=imagecreatefrompng($_FILES['imagen_vicerrector_nuevo']['tmp_name']);
						$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagepng($destino,$ruta);
						$imag_vicerrector="inst_".$ima;
					}else{
						if ($_FILES['imagen_vicerrector_nuevo']['type']=="image/gif") {
							$ima=round(microtime(true)).'.jpg';
							$ruta="assets/img_perfil/inst_".$ima;
							$origen=imagecreatefromgif($_FILES['imagen_vicerrector_nuevo']['tmp_name']);
							$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
							imagegif($destino,$ruta);
							$imag_vicerrector="inst_".$ima;
						}else{
							$imag_vicerrector='';
						}
					}
				}
			}

			//director
			$imagen=$_FILES['imagen_director_nuevo']['tmp_name'];
			if ($imagen==null) {
				$imag_director=$foto_dirrector_anterior;
			}else{
				if($foto_dirrector_anterior){
					unlink("./assets/img_perfil/".$foto_dirrector_anterior);
				}
				list($ancho,$alto)=getimagesize($_FILES['imagen_director_nuevo']['tmp_name']);
				$nuevo_ancho=220;
				$nuevo_alto=250;
				if ($_FILES['imagen_director_nuevo']['type']=="image/jpg" || $_FILES['imagen_director_nuevo']['type']=="image/jpeg") {
					$ima=round(microtime(true)).'.jpg';
					$ruta="assets/img_perfil/inst_".$ima;
					$origen=imagecreatefromjpeg($_FILES['imagen_director_nuevo']['tmp_name']);
					$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagejpeg($destino,$ruta);
					$imag_director="inst_".$ima;
				}else{
					if ($_FILES['imagen_director_nuevo']['type']=="image/png") {
						$ima=round(microtime(true)).'.jpg';
						$ruta="assets/img_perfil/inst_".$ima;
						$origen=imagecreatefrompng($_FILES['imagen_director_nuevo']['tmp_name']);
						$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagepng($destino,$ruta);
						$imag_director="inst_".$ima;
					}else{
						if ($_FILES['imagen_director_nuevo']['type']=="image/gif") {
							$ima=round(microtime(true)).'.jpg';
							$ruta="assets/img_perfil/inst_".$ima;
							$origen=imagecreatefromgif($_FILES['imagen_director_nuevo']['tmp_name']);
							$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
							imagegif($destino,$ruta);
							$imag_director="inst_".$ima;
						}else{
							$imag_director='';
						}
					}
				}
			}


			//ejecutivo centro de estudiantes
			$imagen=$_FILES['imagen_ejecutivo_nuevo']['tmp_name'];
			if ($imagen==null) {
				$imag_ejecutivo_centro=$foto_ejecutivo_ant;
			}else{
				if($foto_ejecutivo_ant){
					unlink("./assets/img_perfil/".$foto_ejecutivo_ant);
				}
				list($ancho,$alto)=getimagesize($_FILES['imagen_ejecutivo_nuevo']['tmp_name']);
				$nuevo_ancho=220;
				$nuevo_alto=250;
				if ($_FILES['imagen_ejecutivo_nuevo']['type']=="image/jpg" || $_FILES['imagen_ejecutivo_nuevo']['type']=="image/jpeg") {
					$ima=round(microtime(true)).'.jpg';
					$ruta="assets/img_perfil/inst_".$ima;
					$origen=imagecreatefromjpeg($_FILES['imagen_ejecutivo_nuevo']['tmp_name']);
					$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagejpeg($destino,$ruta);
					$imag_ejecutivo_centro="inst_".$ima;
				}else{
					if ($_FILES['imagen_ejecutivo_nuevo']['type']=="image/png") {
						$ima=round(microtime(true)).'.jpg';
						$ruta="assets/img_perfil/inst_".$ima;
						$origen=imagecreatefrompng($_FILES['imagen_ejecutivo_nuevo']['tmp_name']);
						$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagepng($destino,$ruta);
						$imag_ejecutivo_centro="inst_".$ima;
					}else{
						if ($_FILES['imagen_ejecutivo_nuevo']['type']=="image/gif") {
							$ima=round(microtime(true)).'.jpg';
							$ruta="assets/img_perfil/inst_".$ima;
							$origen=imagecreatefromgif($_FILES['imagen_ejecutivo_nuevo']['tmp_name']);
							$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
							imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
							imagegif($destino,$ruta);
							$imag_ejecutivo_centro="inst_".$ima;
						}else{
							$imag_ejecutivo_centro='';
						}
					}
				}
			}



	        $obj=array(
				'in_logo'=>$imag,
				'in_nombre'=>$nombre,
				'in_correo1'=>$correo1,
				'in_correo2'=>$correo2,
				'in_celular1'=>$celular1,
				'in_celular2'=>$celular2,
				'in_telefono1'=>$telefono1,
				'in_telefono2'=>$telefono2,
				'in_facebook'=>$facebook,
				'in_twitter'=>$twitter,
				'ins_url_youtube'=>$youtube,
				'in_ubicacion'=>$direccion,
				'in_google_map'=>$api_map,
				'in_mision'=>$mision,
				'in_vision'=>$vision,
				'in_historia'=>'',
				'idusuario'=>$id_usuario,
				'in_fecha_reg'=>date('Y-m-d'),
				'in_foto_autoridad'=>$imag_auto,
				'in_nombre_autoridad'=>$nombre_auto,
				'foto_vicerrector'=>$imag_vicerrector,
				'nombre_vicerrector'=>$vicerrector,
				'foto_director_carrera'=>$imag_director,
				'nombre_director_carrera'=>$director_carrea,
				'foto_ejecutivo_carrera'=>$imag_ejecutivo_centro,
				'nombre_ejecutivo_carrera'=>$ejecutivo_centro
			);
			$this->Modelo_configuracion->editar_tabla_sys('institucion',$obj,'idinstitucion',$idinstitucion);

		}
	//modulo de usuario

}
