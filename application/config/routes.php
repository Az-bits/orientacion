<?php
defined('BASEPATH') or exit('No direct script access allowed');

//$route['default_controller'] = 'Auth';
$route['default_controller'] = 'Controller_pagina';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


require_once APPPATH . "/libraries/Hasher.php";
$route['upea/([a-zA-Z0-9]+)'] = function ($hash) {
	return Hasher::callController($hash);
};

$route['login'] = 'Auth/login';
$route['salir'] = 'Auth/logout';

$route['test/(:any)'] = 'Controller_pagina/V_test/$1';

//$route['inicio'] = 'Controller_sistema/inicio';
//$route['perfil'] = 'Controller_sistema/perfil';

//modulo de usuario
//$route['admin_usuarios'] = 'Controller_sistema/admin_usuarios';


//$route['privilegios'] = 'Controller_sistema/privilegios';
//$route['institucion'] = 'Controller_sistema/institucion';
//modulo de usuario


// modulo de blog
//$route['admin_blog'] = 'Controller_administracion/admin_blog';
//$route['nuevoBlog'] = 'Controller_administracion/nuevoBlog';
//$route['visualizarBlog/(:any)'] = 'Controller_administracion/visualizarBlog/$1';
//$route['editarBlog/(:any)'] = 'Controller_administracion/editarBlog/$1';
// modulo de blog

// modulo de visitas
//$route['visitas'] = 'Controller_administracion/visitas';
// modulo de visitas

// modulo de slider
//$route['slider'] = 'Controller_administracion/slider';
// modulo de slider

// modulo de CONVOCATORIAS / COMUNICADOS
//$route['convocatoriasComunicados'] = 'Controller_administracion/convocatoriasComunicados';
//$route['nuevoConvocatoriasComunicados'] = 'Controller_administracion/nuevoConvocatoriasComunicados';
//$route['editarConvocatoriasComunicados/(:any)'] = 'Controller_administracion/editarConvocatoriasComunicados/$1';
// modulo de CONVOCATORIAS / COMUNICADOS



// modulo de cursos
//$route['tipoCursos'] = 'Controller_administracion/tipoCursos';

//$route['detallesCursos'] = 'Controller_administracion/detallesCursos';
//$route['nuevoCursos'] = 'Controller_administracion/nuevoCursos';
/*$route['editarCursos/(:any)'] = 'Controller_administracion/editarCursos/$1';

$route['adminCursos'] = 'Controller_administracion/adminCursos';

$route['inscripcionCurso'] = 'Controller_administracion/inscripcionCurso';
$route['inscripcionNuevoCursos'] = 'Controller_administracion/inscripcionNuevoCursos';

$route['entregaCertificados'] = 'Controller_administracion/entregaCertificados';
*/
// modulo de cursos

//$route['inscripcionCursos'] = 'Controller_administracion/inscripcionCursos';

//$route['adminCursos']='Controller_administracion/adminCursos';

//$route['Detalle_curso']= 'Controller_administracion/detalle_curso';
// modulo de pagina web

$route['paginaInicio'] = 'Controller_pagina/paginaInicio';
/*$route['paginaNoticia/(:any)'] = 'Controller_pagina/paginaNoticia/$1';
$route['paginacionNoticia'] = 'Controller_pagina/paginacionNoticia';
$route['paginaNoticiaDetallado/(:any)'] = 'Controller_pagina/paginaNoticiaDetallado/$1';*/

$route['paginaContacto'] = 'Controller_pagina/paginaContacto';
// modulo de pagina web


//$route['editardetallesCursos']="Controller_administracion/editardetallesCursos";