<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="Blas Eddy Cruz Mamani">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Test de Inteligencia</title>
  <link href="<?php echo base_url();?>assets_/libs/img/UPEA.png" rel="icon">
  <link rel="stylesheet" href="<?php echo base_url();?>assets_/test/css/style.css">
</head>
<body>

  <div class="form-register">
    <div style="text-align: center">
      <?php $listar=$this->Modelo_resultado3->M_lista_resultado_est3($idest);
        $con=1; foreach ($listar as $value) { ?>
        <?php   } ?>
      <h3>Hola <b style="color:cyan;"><?php echo $value->nombre_est; ?></b> estos son los resultados de tu Test de interes profesional KUDER-ABREVIADO</h3>
    </div>
    <table border="1" id="" class="" style="border-color:cyan;border-spacing:0px; width:100%"><br>
        <thead>
        <tr style="color:cyan">
            <th>N°</th>
            <th>Area de Interes</th>
            <th>PD</th>
        </tr>
        </thead>
        <tbody>
        
            <tr>
              <td>1 </td>
              <td>Actividad al Aire Libre</td>
              <td><?php echo round(((100*($int19->SUMA))/30), 2)." %"; ?> </td>
            </tr>
            
            <tr>
              <td>2 </td>
              <td>Interés mecánico-constructivo</td>
              <td><?php echo round(((100*($int20->SUMA))/30), 2)." %";  ?> </td>
            </tr>
            <tr>
              <td>3 </td>
              <td>Interés por el Cálculo</td>
              <td><?php echo round(((100*($int21->SUMA))/30), 2)." %";  ?> </td>
            </tr>
            <tr>
              <td>4 </td>
              <td>Interés científico</td>
              <td><?php echo round(((100*($int22->SUMA))/30), 2)." %";  ?> </td>
            </tr>
            <tr>
              <td>5 </td>
              <td>Interés persuasivo</td>
              <td><?php echo round(((100*($int23->SUMA))/30), 2)." %";  ?> </td>
            </tr>
            <tr>
              <td>6 </td>
              <td>Interés artístico-plástico</td>
              <td><?php echo round(((100*($int24->SUMA))/30), 2)." %";  ?> </td>
            </tr>
            <tr>
              <td>7 </td>
              <td>Interés literario</td>
              <td><?php echo round(((100*($int25->SUMA))/30), 2)." %";  ?> </td>
            </tr>
            <tr>
              <td>8 </td>
              <td>Interés musical</td>
              <td><?php echo round(((100*($int26->SUMA))/30), 2)." %";  ?> </td>
            </tr>
            <tr>
              <td>9 </td>
              <td>Interés por el servicio social</td>
              <td><?php echo round(((100*($int27->SUMA))/30), 2)." %";  ?> </td>
            </tr>
            <tr>
              <td>10 </td>
              <td>Interés por el trabajo de oficina</td>
              <td><?php echo round(((100*($int28->SUMA))/30), 2)." %";  ?> </td>
            </tr>
           
            
           
            
        
      </tbody> 
    </table>
    <h3>campos de intereses según el area</h3>
    <table border="1" id="" class="" style="border-color:cyan;border-spacing:0px; width:100%"><br>
        <thead>
        <tr style="color:cyan">
            <th>area de interes</th>
            <th>campo</th>
        </tr>
        </thead>
        <tbody>
        <?php $listar=$this->Modelo_resultado3->lista_area_campo($idest);
        $con=1; foreach ($listar as $value) { ?>
            <tr>
              <td ><?php echo $value->nombre_interes; ?></td>
              <td ><?php echo $value->campos; ?></td>
            </tr>
        <?php   } ?>
      </tbody> 
    </table>

    <a href="<?php echo base_url(Hasher::make(270))?>"><button class="botons" type="submit">FINALIZAR</button></a>
    </div>
</body>
</html>
<script type="text/javascript">//<![CDATA[


function checkDevTools() {
  // Iniciar cronómetro
    var time_start = (new Date()).getTime();

  // Pausar ejecución
  debugger;

  // Parar cronómetro
  var time_end = (new Date()).getTime();
  var diff = time_end - time_start;
  
  // Detectar Developer Tools abierto
  var tolerance = 300;
  var dev_open = (diff > tolerance);

  // Mostrar mensaje de error
  if (dev_open) {
    document.body.innerHTML = 'Rastreando IP... Cierra las Developer Tools y recarga la web';
  }
  
  // Preparar la siguiente ejecución
  setTimeout(checkDevTools, 250);
}
checkDevTools();


  //]]></script>