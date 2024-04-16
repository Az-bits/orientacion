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
      <?php $listar=$this->Modelo_resultado2->M_lista_resultado2($idest);
        $con=1; foreach ($listar as $value) { ?>
        <?php   } ?>
      <h3>Hola <b style="color:cyan;"><?php echo $value->nombre_est; ?></b> estos son los resultados de tu Test de inteligencia Múltiple donde destacas en las siguientes</h3>
    </div>
    <table border="1" id="" class="" style="border-color:cyan;border-spacing:0px; width:100%"><br>
        <thead>
        <tr style="color:cyan">
            <th>Inteligencia</th>
            <th>Puntaje</th>
        </tr>
        </thead>
        <tbody>
        <?php $listar=$this->Modelo_resultado2->M_lista_resultado2($idest);
        $con=1; foreach ($listar as $value) { ?>
            <tr>
              <td ><?php echo $value->nombre_inteligencia; ?></td>
              <?php $cont =$value->contar;?>

              <?php if($cont == 5) { ?>
                <td >5 pts. Sobresaliente</td>
              <?php   } ?>

              <?php if($cont == 4) { ?>
                <td >4 pts. Habilidad marcada</td>
              <?php   } ?>

              <?php if($cont < 4) { ?>
                <td ><?php echo $cont; ?> pts. Debes fortalecer esta Inteligencia</td>
              <?php   } ?>
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