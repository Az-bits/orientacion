<?php
//print_r($listar_todo);
//echo "-----------------------------------------<br>";
//print_r($detalle_curso);
?>

<?php
//print_r($detalle);
?>
<?php

require './assets/fpdf/fpdf.php';
//require_once('./application/models/Modelo_administracion.php');
//require('./application/config/database.php');

class PDF extends FPDF
{
// Cabecera de página
    public function Header()
    {
        $this->Image('./assets/pdf/encabezado_acta.jpg', 9, 2, 200);
    }

// Pie de página
    public function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Página') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
    // function listar_est_2021(){};
    public function listar_est($listar_todo, $desde, $hasta)
    {
        // echo "<pre>";
        // var_dump($listar_todo_inscrito);
        // echo "</pre>";
        // die();


        $valor = '';

        $this->Ln(-6);
        $this->Cell(70);
        $this->Cell(63, 10, utf8_decode('TEST ORIENTACIÓN VOCACIONAL CHASIDE - REPORTE'), 0, 1, 'C');
        $this->Line(10, 38, 200, 38);
        $this->SetX(60);
        $this->SetFont('Arial', 'B');
        $this->Cell(100, 5, "Del " . date("d-m-Y", strtotime($desde)) . " hasta el " . date("d-m-Y", strtotime($hasta)), 0, 1, 'C');
        $this->Cell(70);
        $this->SetFont('Arial', '');
        $this->Cell(50, 10, utf8_decode('LISTA DE ESTUDIANTES QUE REALIZARON EL TEST DE ORIENTACIÓN VOCACIONAL'), 0, 1, 'C');
        $this->SetFont('Arial', 'B', 10);
        $this->SetFont('Arial', 'I', 8);
        $this->Ln(-1);

        $this->SetFillColor(0, 70, 161);
        $this->SetDrawColor(0, 0, 0);
        $this->SetTextColor(255, 255, 255);
        $this->SetFont('Arial', 'B', 10);

        $this->SetFont('Arial', 'B', 6);
        $this->SetX(9);
        $this->Cell(4, 4, utf8_decode('Nº'), 1, 0, 'C', 1);
        $this->Cell(18, 4, 'CI', 1, 0, 'C', 1);
        $this->Cell(40, 4, 'APELLIDOS', 1, 0, 'C', 1);
        $this->Cell(45, 4, 'NOMBRES', 1, 0, 'C', 1);
        $this->Cell(45, 4, 'UNIDAD EDUCATIVA', 1, 0, 'C', 1);
        $this->Cell(22, 4, 'MUNICIPIO', 1, 0, 'C', 1);
        $this->Cell(10, 4, 'EDAD', 1, 0, 'C', 1);
        $this->Cell(15, 4, 'SEXO', 1, 0, 'C', 1);

        $this->Ln(4);

        $this->SetFont('Arial', 'B', 6);

        $suma_costo = 0;
        $suma_cancelado = 0;
        $suma_deuda_pe = 0;
        $contador = 1;
        $cont = 1;
        $this->SetTextColor(0, 0, 0);
        foreach ($listar_todo as $lista) {

            $this->SetFillColor(255, 255, 255);
            $this->SetX(9);
            $this->Cell(4, 4, $contador++, 1, 0, 'C', 1);
            $this->Cell(18, 4, $lista->ci_est . "  LP", 1, 0, 'C', 1);
            $this->Cell(40, 4, utf8_decode($lista->apellido_est), 1, 0, '', 1);
            $this->Cell(45, 4, utf8_decode($lista->nombre_est), 1, 0, '', 1);
            $this->Cell(45, 4, utf8_decode($lista->nombre_colegio), 1, 0, '', 1);
            $this->Cell(22, 4, utf8_decode($lista->nombre_municipio), 1, 0, '', 1);
            $this->Cell(10, 4, utf8_decode($lista->edad_est), 1, 0, 'C', 1);
            if ($lista->sexo_est == 'M') {
                $this->Cell(15, 4, "Masculino", 1, 0, 'C', 1);
            } else if ($lista->sexo_est == 'F') {
                $this->Cell(15, 4, "Femenino", 1, 0, 'C', 1);
            } else {
                $this->Cell(15, 4, "", 1, 0, '', 1);
            }
            $this->Ln();

        }
        $this->SetFont('Arial', 'B', 7.5);
        $this->SetFillColor(210, 245, 231);
        $contado = $contador - 1;
        $this->Ln(5);
        $this->Cell(150, 5, ' EXISTEN UN TOTAL DE   ' . $contado . utf8_decode('   PERSONAS QUE REALIZARON EL TEST DE ORIENTACIÓN VOCACIONAL CHASIDE'), 1, 0, 'I', 1);
        $this->Ln();
        $this->Cell(150, 5, ' FECHA DE EMISION DE REPORTE   ' . date('m-d-Y h:i:s a'), 1, 0, 'I', 1);

    }

}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->SetMargins(15, 35, 30);
$pdf->AliasNbPages();
$pdf->AddPage('portrait', 'letter');
$pdf->SetFont('Times', '', 12);

$pdf->listar_est($listar_todo, $desde, $hasta);
// $pdf->listar_est_2021($listar_todo_2021);

$pdf->Output();
?>