<?php
    // print_r($listar_todo);
    // echo "-----------------------------------------<br>";
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

    function listar_est($lista_ue_uno){
            $valor='';
         
            $this->Ln(18);
            $this->Cell(70);
            $this->Cell(50,10, 'TEST INTELIGENCIA',0,1,'C');
            $this->Line(10,38,200,38);


            $this->Cell(70);
            $this->Cell(50,10, 'LISTA DE UNIDADES EDUCATIVAS - TEST DE INTELIGENCIA',0,1,'C');
            $this->SetFont('Arial','B',10);

            $this->SetFont('Arial','I',8);

            $this->Ln(2);

      
            $this->SetFillColor(0, 75, 161  );
            $this->SetDrawColor(0, 0, 0);
            $this->SetTextColor(255,255,255);
            $this->SetFont('Arial','B',10); 
            
            $this->SetFont('Arial','B',7);
            $this->Cell(14, 5, utf8_decode('Nº'), 1,0,'C',1);
            $this->Cell(135, 5, 'UNIDAD EDUCATIVA', 1,0,'C',1);
            $this->Cell(40, 5, 'CANTIDAD DE ESTUDIANTES', 1, 0, 'C',1);
           
            $this->Ln(5);
            
            $this->SetFont('Arial','B',8);

            $suma_costo=0;
            $suma_cancelado=0;
            $suma_deuda_pe=0;
            $contador=1;
            $cont=1;
            $this->SetTextColor(0,0,0);
            foreach($lista_ue_uno as $lista){
                
                    $this->SetFillColor(255,255,255);
                    $this->Cell(14, 5,$contador++, 1,0,'C',1);
                    $this->Cell(135, 5, utf8_decode($lista->nombre_colegio), 1,0,'',1);
                    $this->Cell(40, 5, utf8_decode($lista->TOTAL), 1,0,'C',1);
                    
                    $this->Ln();
                  
    
            }
            $this->SetFont('Arial','B',7.5);
            $this->SetFillColor(210, 245, 231);
            $contado=$contador-1;
            $this->Ln(5);
            $this->Cell(139, 5,' EXISTEN UN TOTAL DE   '.$contado.'   UNIDADES EDUCATIVAS ' , 1, 0, 'C',1);
            

            
    }


}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->SetMargins(15,10 , 30);
$pdf->AliasNbPages();
$pdf->AddPage('portrait','letter');
$pdf->SetFont('Times','',12);

$pdf->listar_est($lista_ue_uno);


$pdf->Output();
?>