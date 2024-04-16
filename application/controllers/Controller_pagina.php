<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_pagina extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(['url', 'language']);

        $this->load->model('Modelo_pagina');
        $this->load->model('Modelo_pregunta');
        $this->load->model('Modelo_pregunta2');
        $this->load->model('Modelo_pregunta3');
        $this->load->model('Modelo_administracion');
        $this->load->model('Modelo_configuracion');
        $this->load->model('Modelo_resultado');
        $this->load->model('Modelo_resultado2');
        $this->load->model('Modelo_resultado3');
        $this->load->model('Modelo_estudiante');

        date_default_timezone_set('America/La_Paz');

        $this->load->helper('funciones_helper');
    }

    public function index()
    {
        redirect(base_url() . 'paginaInicio');
    }
    public function paginaInicio()
    {
        // $dato['menu_a']='1';
        // $dato['contenido']="vista_pagina/pagina_inicio";
        // $this->load->view("plantilla_v",$dato);
        //RUTA QUE MANDA A INICIO DE FRONT END PARA ECOJER EL TEST
        $dato['obj'] = $this->Modelo_configuracion->tabla_query('accesos');
        $dato['contenido_p'] = "vista_estudiante/V_principal";
        $this->load->view('plantilla_p', $dato);
    }

    //INSCRIPCION PARA TEST DE ESTUDIANTE DESDE 241,242,245 MAPPING
    public function V_inscripcion1()
    {
        $this->load->view('vista_estudiante/V_inscripcion1');
    }
    public function V_inscripcion2()
    {
        $this->load->view('vista_estudiante/V_inscripcion2');
    }
    public function V_inscripcion3()
    {
        $this->load->view('vista_estudiante/V_inscripcion3');
    }
    public function V_inscripcion4()
    {
        $this->load->view('vista_estudiante/V_inscripcion4');
    }
    public function V_inscripcion_colegio()
    {
        $this->load->view('vista_estudiante/V_inscripcion_colegio');
    }
    ////////////////////////////Controladores para llegar a las ventanas principales de inteligencia e interes//////////////////////////////////////
    public function V_principal2()
    {
        $dato['contenido_p'] = "vista_estudiante/V_principal2";
        $this->load->view('plantilla_p', $dato);
    }
    public function V_principal3()
    {
        $dato['contenido_p'] = "vista_estudiante/V_principal3";
        $this->load->view('plantilla_p', $dato);
    }
    public function V_principal4()
    {
        $dato['contenido_p'] = "vista_estudiante/V_principal4";
        $this->load->view('plantilla_p', $dato);
    }
    public function V_iniciar_Test_DAT($idest)
    {
        $dato['estudiante'] = $this->Modelo_estudiante->M_buscar_id($idest);
        $dato['razonamiento_verbal'] = $this->Modelo_estudiante->M_buscar_test($idest, 1);
        $dato['razonamiento_numerico'] = $this->Modelo_estudiante->M_buscar_test($idest, 2);
        $dato['razonamiento_abstracto'] = $this->Modelo_estudiante->M_buscar_test($idest, 3);
        $dato['razonamiento_mecanico'] = $this->Modelo_estudiante->M_buscar_test($idest, 4);
        $dato['relaciones_espaciales'] = $this->Modelo_estudiante->M_buscar_test($idest, 5);
        $dato['ortografia'] = $this->Modelo_estudiante->M_buscar_test($idest, 6);
        $dato['rapidez_exactitud_i'] = $this->Modelo_estudiante->M_buscar_test($idest, 7);
        $dato['rapidez_exactitud_ii'] = $this->Modelo_estudiante->M_buscar_test($idest, 8);
        $dato['contenido_p'] = "vista_estudiante/V_iniciar_Test_DAT";
        $this->load->view('plantilla_p', $dato);
    }

    //////////////////////////////////////////////
    public function V_inscrip1()
    {
        $this->load->view('vista_estudiante/V_inscrip1');
    }
    /////////////////////////////////////////////////////////////////////////////////////
    //////////////REDIRECCION DE VISTAS DE PREGUNTAS////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////

    public function V_test($idest)
    {
        // echo '<pre>';
        // print_r($idest);
        // echo '</pre>';
        // exit();

        $dato['idest'] = $idest;
        $dato['listar'] = $this->Modelo_pregunta->M_test();
        $this->load->view('frontend/cuestionarios/test-chaside', $dato);
        // $this->load->view('vista_estudiante/V_test', $dato);
    }

    public function V_test2($idest)
    {
        $dato['idest'] = $idest;
        $dato['listar'] = $this->Modelo_pregunta2->M_test2();
        $this->load->view('vista_estudiante/V_test2', $dato);
    }
    public function V_test3($idest)
    {
        $dato['idest'] = $idest;
        $dato['listar'] = $this->Modelo_pregunta3->M_test3();
        $this->load->view('vista_estudiante/V_test3', $dato);
    }
    public function V_test_dat($idtipotest, $idest)
    {
        $dato['estudiante'] = $this->Modelo_estudiante->M_buscar_id($idest);
        $dato['tipo_test'] = $this->Modelo_configuracion->tabla_row_sys('dat_tipo', 'id_dat_tipo', $idtipotest);
        $dato['list_preguntas'] = $this->Modelo_configuracion->tabla_randow('dat_test', 'id_dat', $idtipotest);
        $this->load->view('vista_estudiante/V_test_realizar_DAT', $dato);
    }

    /////////////////////////////////////////////////////////////////////////////////////
    //////////////FIN DE REDIRECCION DE VISTAS DE PREGUNTAS////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////

    public function V_resultado($idest)
    {
        $dato['idest'] = $idest;
        $dato['listar'] = $this->Modelo_resultado->M_lista_resultado($idest);
        // $this->load->view('vista_estudiante/V_resultado', $dato);
        $this->load->view('frontend/resultados/test-chaside-resultado', $dato);
    }
    public function V_resultado2($idest)
    {
        $dato['idest'] = $idest;
        $dato['listar'] = $this->Modelo_resultado2->M_lista_resultado2($idest);

        $this->load->view('vista_estudiante/V_resultado2', $dato);
    }

    public function V_resultado3($idest)
    {

        $dato['idest'] = $idest;
        for ($i = 19; $i <= 28; $i++) {
            $dato['int' . $i] = $this->Modelo_resultado3->resultado2($idest, $i);
        }

        $this->load->view('vista_estudiante/V_resultado3', $dato);
    }

    /////////////////// CONTROL DE RESULTADOS DAT

    public function V_resultado_Test_total($idest)
    {
        $datos['estudiante'] = $this->Modelo_estudiante->M_buscar_id($idest);
        // $this->Modelo_configuracion->tabla_result_sys(
        $tipo_test = $this->Modelo_configuracion->tabla_query('dat_tipo');
        $datos['resultados'] = array();
        foreach ($tipo_test as $tipo) {
            $buscartest = $this->Modelo_estudiante->M_buscar_test($idest, $tipo->id_dat_tipo);

            // $datos['array']= $datos['array']+$tipos;
            if ($buscartest) {

                $total = $this->Modelo_configuracion->cantidad_de_pregunta('dat_test', 'id_dat', $tipo->id_dat_tipo);

                $resultados = $this->Modelo_estudiante->M_lista_test($idest, $tipo->id_dat_tipo, $total->total);

                $cor = 0;
                $inc = 0;
                // $valor= $total->total/5;
                foreach ($resultados as $resultado) {
                    $pregunta = $this->Modelo_estudiante->M_buscar_pregunta($resultado->id_pregunta, $resultado->id_test);
                    if ($pregunta->valor == '1') {
                        $cor++;
                    } else {
                        $inc++;
                    }
                }
                // $va=$valor;
                // $int=1;
                // for ($i = 1; $i <= 5; $i++) {
                //     if($va<=$cor){
                //         $int=$i;
                //     }
                //     $va= $va+$valor;
                // }
                // $promedio = array("Deficiente","Inferior al Termino Medio", "Termino Medio", "Superior al Termino Medio", "Superior");
                $escalas = $this->Modelo_configuracion->M_lista_escalas($tipo->id_dat_tipo);
                $escala = "";
                $escala_texto = "";
                $escala_msg = "";
                if ($cor >= 0 && $cor <= $escalas->deficiente) {
                    $escala = "Deficiente";
                    $escala_texto = "Debe trabajar mucho en esta aptitud";
                    $escala_msg = "danger";
                } else {
                    if ($cor >= ($escalas->deficiente + 1) && $cor <= $escalas->inferior_medio) {
                        $escala = "Inferior al termino medio";
                        $escala_texto = "Debe trabajar en esta aptitud para mejorar";
                        $escala_msg = "danger";
                    } else {
                        if ($cor >= ($escalas->inferior_medio + 1) && $cor <= $escalas->medio) {
                            $escala = "Termino medio";
                            $escala_texto = "Siga trabajando en esta aptitud";
                            $escala_msg = "warning";
                        } else {
                            if ($cor >= ($escalas->medio + 1) && $cor <= $escalas->superior_medio) {
                                $escala = "Superior al termino medio";
                                $escala_texto = "Su aptitud es buena";
                                $escala_msg = "warning";
                            } else {
                                if ($cor >= ($escalas->superior_medio + 1) && $cor <= $escalas->superior) {
                                    $escala = "Superior";
                                    $escala_texto = "Su aptitud esta muy desarrollada";
                                    $escala_msg = "success";
                                } else {
                                    // $promedio = "";
                                }
                            }
                        }
                    }
                }

                array_push($datos['resultados'], array(
                    "idest" => $idest,
                    "test" => $tipo->test,
                    "total_preguntas" => $total->total,
                    "correctas" => $cor,
                    "incorrectas" => $inc,
                    "escala" => $escala,
                    "escala_texto" => $escala_texto,
                    "escala_msg" => $escala_msg,
                    "escalas" => $escalas,
                    "resultados" => count($resultados),
                    // "promedio" => $promedio[$int-1],
                    // "norespondido"=>$total->total-($cor+$inc),
                ),);
            }
        }

        $this->load->view('vista_estudiante/V_resultado_Test_DAT', $datos);
    }
    public function V_examen_Test_DAT($idtipotest, $idest)
    {
        $dato['estudiante'] = $this->Modelo_estudiante->M_buscar_id($idest);
        $dato['tipo_test'] = $this->Modelo_configuracion->tabla_row_sys('dat_tipo', 'id_dat_tipo', $idtipotest);
        $dato['total_preguntas'] = $this->Modelo_configuracion->cantidad_de_pregunta('dat_test', 'id_dat', $idtipotest);
        $this->load->view('vista_estudiante/V_instrucciones_Test_DAT', $dato);
    }
}
