<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_respuesta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modelo_respuesta');
        $this->load->model('Modelo_resultado');
    }
    public function index()
    {
        redirect('C_insertar_respuesta');
    }

    public function C_insertar_respuesta()
    {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // exit();
        $datos = $this->input->post();
        if (isset($datos)) {
            $idest = $datos['idest'];
            $idpreg = $datos['idpreg']; ///array()
            //$respuesta = $datos['respuesta'];///array()
            //cambiar esto
            if (count($idpreg) == 98 || count($idpreg) != 98) {
                if (is_array($idpreg)) {

                    for ($i = 0; $i < count($idpreg); $i++) {
                        $obj = array(
                            'idestudiante' => $idest,
                            'idpreguntas' => $idpreg[$i],
                            'est_respuesta' => $this->input->post('respuesta' . $idpreg[$i]),
                        );
                        $tabla = "respuestas";

                        $this->Modelo_respuesta->insertar_tabla_sys($tabla, $obj);
                    } //fin for

                    redirect(base_url(Hasher::make(237, $idest)));
                } //fin if
            } else {
                redirect(base_url(Hasher::make(234, $idest)));
            }
        } //fin if
    } //fin function

    ///// NUEVO
    public function C_insertar_respuesta_DAT()
    {
        $datos = $this->input->post();
        $idpreg = $datos['idpreg']; ///array()
        $respuesta = $datos['respuesta']; ///array()
        $idest = $datos['idestudiante']; ///array()
        $dat['estudiante'] = $datos;
        // cambiar esto

        for ($i = 0; $i < count($idpreg); $i++) {
            if ($this->input->post($idpreg[$i])) {
                $obj = array(
                    'id_usuario' => $idest,
                    'id_test' => $idpreg[$i],
                    'id_pregunta' => $this->input->post($idpreg[$i]),
                    'id_dat_tipo' => $this->input->post('id_dat_tipo'),
                    'estado' => 'ACTIVO',
                    'fecha_creado' => date('Y-m-d H:i:s'),
                    'fecha_actualizado' => date('Y-m-d H:i:s'),
                );
                $tabla = "dat_resultado";

                $this->Modelo_respuesta->insertar_tabla_sys($tabla, $obj);
            }
        } //fin for

        // redirect(base_url(Hasher::make(2552, $idest)));

        // Redirigir a resultados
        redirect(base_url(Hasher::make(2518, $idest)));
    } //fin function

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
        $sum2 = 100;
        $sum3 = 120;
        $sum4 = 100;
        foreach ($listar as $value) {
            $pdf->setXY(15, $col + $sum);
            $pdf->SetFont('Times', '', 12);
            $pdf->Cell(80, 90, "", 1);

            $pdf->SetXY(20, $sum3);
            $sum3 = $sum3 + 100;
            $pdf->MultiCell(70, 5, utf8_decode($value->nombre_area), 0, 'L');
            $areas = $this->Modelo_resultado->M_lista_areasExistentes($value->idarea_pregunta);
            foreach ($areas as $area) {
                $pdf->SetFont('Times', '', 11);
                $pdf->setXY(95, $col + 10);
                $pdf->MultiCell(100, 90 / count($areas), "", 1);
                $pdf->setXY(100, $col + (40 / count($areas)));
                $pdf->MultiCell(100, 1, $area->nombre_areaexistente, 0);

                $carreras = $this->Modelo_resultado->M_lista_carrerasExistentes($area->id_area_existente);
                foreach ($carreras as $carrera) {
                    $pdf->setfont('Times', '', 10);
                    $pdf->setXY(105, $sum2);
                    $pdf->MultiCell(100, 1, "- " . $carrera->nombre_carrera, 0);
                    // $pdf->Cell(100, $sum2, $carrera->nombre_carrera, 0);
                    $sum2 = $sum2 + 3;
                }
                $sum2 = $sum2 + (70 / count($areas));
                $col = $col + (90 / count($areas));
            }
            $sum2 = 380 / count($areas);
        }
        $time = date("dmY_his");
        $pdf->Output($listar[0]->nombre_est . "_" . $time . ".pdf", 'I');
    }
}
