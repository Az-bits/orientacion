<?php
    //print_r($listar_todo);
    //echo "-----------------------------------------<br>";
    //print_r($detalle_curso);
?>

<?php 
    //print_r($detalle);
?>
<?php
  
require('./assets/fpdf/fpdf.php');
//require_once('./application/models/Modelo_administracion.php');
//require('./application/config/database.php');


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->Image('./assets/pdf/encabezado_acta.jpg',9,2,200);
}


// Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
    }
    // function listar_est_2021(){};
    function listar_est($listar_todo_inscrito){
            $valor='';
         
            $this->Ln(-6);
            $this->Cell(70);
            $this->Cell(63,10, utf8_decode('TEST ORIENTACIÓN VOCACIONAL CHASIDE -REPORTE 2021'),0,1,'C');
            $this->Line(10,38,200,38);
            $this->Cell(70);
            $this->Cell(50,10, utf8_decode('LISTA DE ESTUDIANTES QUE REALIZARON EL TEST DE ORIENTACIÓN VOCACIONAL'),0,1,'C');
            $this->SetFont('Arial','B',10);
            $this->SetFont('Arial','I',8);
            $this->Ln(-1);         

           
            $this->SetFillColor(0, 70, 161  );
            $this->SetDrawColor(0, 0, 0);
            $this->SetTextColor(255,255,255);
            $this->SetFont('Arial','B',10); 
            
            $this->SetFont('Arial','B',7);
            $this->Cell(4, 5, utf8_decode('Nº'), 1,0,'C',1);
            $this->Cell(22, 5, 'CI', 1,0,'C',1);            
            $this->Cell(35, 5, 'APELLIDOS', 1, 0, 'C',1);
            $this->Cell(47, 5, 'NOMBRES', 1, 0, 'C',1);
            $this->Cell(52, 5, 'UNIDAD EDUCATIVA', 1, 0, 'C',1);
            $this->Cell(22, 5, 'OBSERVACIONES', 1, 0, 'C',1);
           
            $this->Ln(5);
            
            $this->SetFont('Arial','B',8);

            $suma_costo=0;
            $suma_cancelado=0;
            $suma_deuda_pe=0;
            $contador=1;
            $cont=1;
            $this->SetTextColor(0,0,0);
            foreach($listar_todo_inscrito as $lista){
                
                    $this->SetFillColor(255,255,255);
                    $this->Cell(6, 5,$contador++, 1,0,'C',1);
                    $this->Cell(22, 5, $lista->ci_est. "  LP", 1,0,'C',1);
                    $this->Cell(39, 5, utf8_decode($lista->apellido_est), 1,0,'',1);
                    $this->Cell(40, 5, utf8_decode($lista->nombre_est), 1,0,'',1);
                    $this->Cell(53, 5, utf8_decode($lista->colegio_est), 1,0,'',1);
                    $this->Cell(22, 5, utf8_decode($lista->nombre_municipio), 1,0,'',1);
                    $this->Ln();
                  
    
            }
            $this->SetFont('Arial','B',7.5);
            $this->SetFillColor(210, 245, 231);
            $contado=$contador-1;
            $this->Ln(5);
            $this->Cell(150, 5,' EXISTEN UN TOTAL DE   '.$contado.utf8_decode('   PERSONAS QUE REALIZARON EL TEST DE ORIENTACIÓN VOCACIONAL CHASIDE') , 1, 0, 'I',1);
            $this->Ln();
            $this->Cell(150, 5,' FECHA DE EMISION DE REPORTE   '.date('m-d-Y h:i:s a') , 1, 0, 'I',1);
            

            
    }


}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->SetMargins(15, 35 , 30);
$pdf->AliasNbPages();
$pdf->AddPage('portrait','letter');
$pdf->SetFont('Times','',12);

$pdf->listar_est($listar_todo_2021);
// $pdf->listar_est_2021($listar_todo_2021);


$pdf->Output();
?>