<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_reporte_pdf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->helper(['url', 'language']);

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->load->model('Modelo_administracion');
        $this->load->model('Modelo_configuracion');
        $this->load->model('Modelo_resultado');
        $this->load->model('Backend_model');

        if (!$this->session->userdata('is_logued_in')) {
            redirect(base_url() . 'login', 'refresh');
        }
        date_default_timezone_set('America/La_Paz');

        $this->load->helper('funciones_helper');
        $this->menu = $this->Backend_model->listar_menus_privilegios();
    }
    public function index()
    {
        redirect(base_url() . 'inicio');
    }

    //
    public function listar_est1()
    {
        $desde = '2020-10-02';
        $hasta = date('Y-m-d');

        $dato['listar_todo'] = $this->Modelo_administracion->listar_es_pdf();
        $dato['desde'] = $desde;
        $dato['hasta'] = $hasta;

        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_todo', $dato);
    }

    public function listar_est1_intervalo()
    {
        $desde = $this->input->post('desde_fecha');
        $hasta = $this->input->post('hasta_fecha');

        echo $desde . " - " . $hasta;
        $dato['listar_todo'] = $this->Modelo_administracion->listar_es_pdf_intervalo($desde, $hasta);
        $dato['desde'] = $desde;
        $dato['hasta'] = $hasta;
        // echo "<pre>";
        // var_dump($dato);
        // echo "</pre>";
        // die();

        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_todo', $dato);
    }
    public function listar_est_2021_test1()
    {

        $dato['listar_todo_2021'] = $this->Modelo_administracion->listar_es_pdf_2021();
        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_todo_2021_test1', $dato);
    }
    public function listar_est_2021_total()
    {
        $dato['listar_todo_2021'] = $this->Modelo_administracion->listar_est_total_2021();
        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_todo_2021', $dato);
    }
    public function listar_ue_test_1()
    {
        $dato['lista_ue_uno'] = $this->Modelo_administracion->lista_ue_uno();
        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_ue_uno', $dato);
    }

    public function listar_est2()
    {
        $desde = '2020-10-02';
        $hasta = date('Y-m-d');

        $dato['listar_todo'] = $this->Modelo_administracion->listar_es2_pdf();
        $dato['desde'] = $desde;
        $dato['hasta'] = $hasta;
        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_todo_2', $dato);
    }
    public function listar_est2_intervalo()
    {
        $desde = $this->input->post('desde_fecha');
        $hasta = $this->input->post('hasta_fecha');

        echo $desde . " - " . $hasta;
        $dato['listar_todo'] = $this->Modelo_administracion->listar_es2_pdf_intervalo($desde, $hasta);
        $dato['desde'] = $desde;
        $dato['hasta'] = $hasta;
        // echo "<pre>";
        // var_dump($dato);
        // echo "</pre>";
        // die();

        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_todo_2', $dato);
    }

    public function listar_ue_test_2()
    {
        $dato['lista_ue_uno'] = $this->Modelo_administracion->lista_ue_uno();
        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_ue_dos', $dato);
    }
    public function listar_est3()
    {
        $desde = '2020-10-02';
        $hasta = date('Y-m-d');

        $dato['listar_todo'] = $this->Modelo_administracion->listar_es3_pdf();
        $dato['desde'] = $desde;
        $dato['hasta'] = $hasta;

        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_todo_3', $dato);
    }
    public function listar_est3_intervalo()
    {
        $desde = $this->input->post('desde_fecha');
        $hasta = $this->input->post('hasta_fecha');

        $dato['listar_todo'] = $this->Modelo_administracion->listar_es3_pdf_intervalo($desde, $hasta);
        $dato['desde'] = $desde;
        $dato['hasta'] = $hasta;

        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_todo_3', $dato);
    }
    public function listar_ue_test_3()
    {
        $dato['lista_ue_uno'] = $this->Modelo_administracion->lista_ue_uno();
        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_ue_tres', $dato);
    }
    public function listar_est4($dat_tipo)
    {
        $desde = '2020-10-02';
        $hasta = date('Y-m-d');
        $titulo = '';

        switch ($dat_tipo) {
            case 0: $titulo = 'APTITUDES DIFERENTES (DAT)'; break;
            case 1: $titulo = 'RAZONAMIENTO VERBAL'; break;
            case 2: $titulo = 'RAZONAMIENTO NUMÉRICO'; break;
            case 3: $titulo = 'RAZONAMIENTO ABSTRACTO'; break;
            case 4: $titulo = 'RAZONAMIENTO MECÁNICO'; break;
            case 5: $titulo = 'RELACIONES ESPACIALES'; break;
            case 6: $titulo = 'ORTOGRAFIA'; break;
            case 7: $titulo = 'RAPIDEZ Y EXACTITUD PERCEPTIVA (I - II)'; break;
            default: $titulo =  ''; break;
        }

        $dato['listar_todo'] = $this->Modelo_administracion->listar_es4_pdf($dat_tipo);
        $dato['desde'] = $desde;
        $dato['hasta'] = $hasta;
        $dato['titulo'] = $titulo;

        // echo "<pre>";
        // var_dump($dato);
        // echo "</pre>";
        // die();

        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_todo_4', $dato);
    }
    public function listar_est4_intervalo()
    {
        $desde = $this->input->post('desde_fecha');
        $hasta = $this->input->post('hasta_fecha');
        $titulo = '';
        $dat_tipo = $this->input->post('id_tipo');

        switch ($dat_tipo) {
            case 0: $titulo = 'APTITUDES DIFERENTES (DAT)'; break;
            case 1: $titulo = 'RAZONAMIENTO VERBAL'; break;
            case 2: $titulo = 'RAZONAMIENTO NUMÉRICO'; break;
            case 3: $titulo = 'RAZONAMIENTO ABSTRACTO'; break;
            case 4: $titulo = 'RAZONAMIENTO MECÁNICO'; break;
            case 5: $titulo = 'RELACIONES ESPACIALES'; break;
            case 6: $titulo = 'ORTOGRAFIA'; break;
            case 7: $titulo = 'RAPIDEZ Y EXACTITUD PERCEPTIVA (I - II)'; break;
            default: $titulo =  ''; break;
        }
        
        $dato['listar_todo'] = $this->Modelo_administracion->listar_es4_pdf_intervalo($desde, $hasta, $dat_tipo);
        $dato['desde'] = $desde;
        $dato['hasta'] = $hasta;
        $dato['titulo'] = $titulo;
        
        // echo "<pre>";
        // var_dump($dato);
        // echo "</pre>";
        // die();

        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_todo_4', $dato);
    }
    public function listar_ue_test_dat()
    {
        $dato['lista_ue_uno'] = $this->Modelo_administracion->lista_ue_uno();
        $this->load->view('vista_administracion/reportes_pdf/pdf_lista_ue_dat', $dato);
    }
    public function resultado_chaside()
    {
        $idest = $this->input->post('id_est');
        $listar = $this->Modelo_resultado->M_lista_resultado($idest);

        require './assets/fpdf/fpdf.php';
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->Image('./assets/pdf/encabezado_acta.jpg', 8, 7, 200);
        $pdf->SetXY(20, 40);
        $pdf->SetFont('Times', 'B', 14);
        $pdf->MultiCell(170, 5, "RESULTADO DEL TEST VOCACIONAL - CHASIDE", 0, 'C', false);

        $pdf->setXY(21, 52);
        $pdf->SetFont('Times', '', 12);
        $pdf->MultiCell(170, 7, "Hola " . $listar[0]->nombre_est . " " . $listar[0]->apellido_est . " estos son los resultados de tu Test de Orientacion Vocacional, estas son las posibles carreras que puedes estudiar.", 0, 'C', false);

        $pdf->SetFont('Times', '', 12);
        $pdf->setXY(15, 75);
        $pdf->Cell(80, 10, "AREA", 1);
        $pdf->Cell(100, 10, "AREAS Y CARRERAS EXISTENTES EN LA UPEA", 1);

        $col = 75;
        $sum = 10;
        $sum2 = 5;
        foreach ($listar as $value) {
            $pdf->setXY(15, $col + $sum);
            $pdf->SetFont('Times', '', 8);
            $pdf->Cell(80, 90, utf8_decode($value->nombre_area), 1);
            $areas = $this->Modelo_resultado->M_lista_areasExistentes($value->idarea_pregunta);
            foreach ($areas as $area) {
                $pdf->setX(95);
                $pdf->MultiCell(100, 90 / count($areas), "", 1);
                $pdf->setX(100);
                // $pdf->Cell(100, -90, $area->nombre_areaexistente, 0);

                $carreras = $this->Modelo_resultado->M_lista_carrerasExistentes($area->id_area_existente);
                foreach ($carreras as $carrera) {
                    $pdf->setX(120);
                    $pdf->setfont('Times', '', 8);
                    // $pdf->Cell(100, $sum2, $carrera->nombre_carrera, 0);
                    $sum2 = $sum2 + 5;
                }
            }

            $sum = $sum + 90;
        }
        $pdf->Output('Resultado.pdf', 'I');
    }
}
