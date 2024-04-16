<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_reporte_excel extends CI_Controller
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

    public function listar_est1_excel()
    {
        $reporte = $this->Modelo_administracion->listar_es_pdf();
        $data['reporte'] = $reporte;

        $this->load->view("vista_administracion/reportes_excel/Reporte1_excel.php", $data);
    }

    public function listar_est1_excel_intervalo()
    {
        $desde = $this->input->post('desde_fecha');
        $hasta = $this->input->post('hasta_fecha');

        $reporte = $this->Modelo_administracion->listar_es_pdf_intervalo($desde, $hasta);
        $data['reporte'] = $reporte;
        $data['desde'] = $desde;
        $data['hasta'] = $hasta;

        $this->load->view("vista_administracion/reportes_excel/Reporte1_excel_intervalo.php", $data);
    }

    public function listar_ue_est1_excel()
    {
        $reporte = $this->Modelo_administracion->lista_ue_uno();
        $data['reporte'] = $reporte;
        // echo "<pre>";
        // var_dump($reporte);
        // echo "</pre>";
        // die();

        $this->load->view("vista_administracion/reportes_excel/Reporte1_ue.php", $data);
    }

    public function listar_est2_excel()
    {
        $reporte = $this->Modelo_administracion->listar_es2_pdf();
        $data['reporte'] = $reporte;

        $this->load->view("vista_administracion/reportes_excel/Reporte2_excel.php", $data);
    }

    public function listar_est2_excel_intervalo()
    {
        $desde = $this->input->post('desde_fecha');
        $hasta = $this->input->post('hasta_fecha');

        $reporte = $this->Modelo_administracion->listar_es2_pdf_intervalo($desde, $hasta);
        $data['reporte'] = $reporte;
        $data['desde'] = $desde;
        $data['hasta'] = $hasta;

        $this->load->view("vista_administracion/reportes_excel/Reporte2_excel_intervalo.php", $data);
    }
    public function listar_est3_excel()
    {
        $reporte = $this->Modelo_administracion->listar_es3_pdf();
        $data['reporte'] = $reporte;

        $this->load->view("vista_administracion/reportes_excel/Reporte3_excel.php", $data);
    }

    public function listar_est3_excel_intervalo()
    {
        $desde = $this->input->post('desde_fecha');
        $hasta = $this->input->post('hasta_fecha');

        $reporte = $this->Modelo_administracion->listar_es3_pdf_intervalo($desde, $hasta);
        $data['reporte'] = $reporte;
        $data['desde'] = $desde;
        $data['hasta'] = $hasta;

        $this->load->view("vista_administracion/reportes_excel/Reporte3_excel_intervalo.php", $data);
    }
    public function listar_est4_excel($dat_tipo)
    {
        $reporte = $this->Modelo_administracion->listar_es4_pdf($dat_tipo);
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
        
        $data['reporte'] = $reporte;
        $data['titulo'] = $titulo;
        $this->load->view("vista_administracion/reportes_excel/Reporte4_excel.php", $data);
    }

    public function listar_est4_excel_intervalo()
    {
        $desde = $this->input->post('desde_fecha');
        $hasta = $this->input->post('hasta_fecha');
        $dat_tipo = $this->input->post('id_tipo_excel'); 
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

        $reporte = $this->Modelo_administracion->listar_es4_pdf_intervalo($desde, $hasta, $dat_tipo);
        $data['reporte'] = $reporte;
        $data['titulo'] = $titulo;
        $data['desde'] = $desde;
        $data['hasta'] = $hasta;

        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        // die();

        $this->load->view("vista_administracion/reportes_excel/Reporte4_excel_intervalo.php", $data);
    }
}
