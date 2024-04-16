<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="Blas Eddy Cruz Mamani">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Test de Orientación Vocacional</title>
  <link href="<?php echo base_url(); ?>assets_/libs/img/UPEA.png" rel="icon">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/test/css/style.css">
  <style>
    .list-1 > li {
      margin-left: 25px;
    }
    .list-2 > li {
      margin-left: 40px;
    }
    .enlaces-dat {
      display: block;
      margin: 10px;
      padding: 10px;
      background-color: #0686ff;
    }
    .tabla-resultado tr {
      padding: 10px;
    }
    .btn-dat {
      padding: 10px;
      margin-bottom: 10px;
      display: block;
      border: 1px solid cyan;
      border-radius: 10px;
    }
    .btn-dat:hover {
      background-color: cyan;
      text-decoration: none !important;
    }
  </style>
</head>
<body>

  <div class="form-register">
    <div style="text-align: center">
      <?php $listar = $this->Modelo_resultado->M_lista_resultado($idest);
$con = 1;foreach ($listar as $value) {?>
        <?php }?>
      <h3>Hola <b style="color:cyan;"><?php echo $value->nombre_est; ?></b> estos son los resultados de tu Test de Orientación Vocacional, estas son las posibles carreras que puedes estudiar.<br>Complementa los resultados realizando el Test de Aptitudes Diferentes</h3>
    </div>
    <!-- <pre>
      <?php print_r($this->Modelo_resultado->M_lista_resultado($idest))?>
    </pre> -->
    <table border="1" id="" class="tabla-resultado" style="border-color:cyan;border-spacing:0px; width:100%"><br>
        <thead>
        <tr style="color:cyan; padding: 30px;">
            <th>AREA</th>
            <th>AREAS Y CARRERAS EXISTENTES EN LA UPEA</th>
            <th>RECOMENDACIONES PARA TEST DE APTITUDES DIFERENTES</th>
        </tr>
        </thead>
      <tbody>
      <?php $listar = $this->Modelo_resultado->M_lista_resultado($idest);
$con = 1;foreach ($listar as $value) {?>
            <tr>
              <td style="padding: 15px;"><?php echo $value->nombre_area; ?></td>
              <td style="padding: 20px;">
                <ul class="list-1">
                <?php foreach ($this->Modelo_resultado->M_lista_areasExistentes($value->idarea_pregunta) as $areas): ?>
                  <li>
                    <?php echo $areas->nombre_areaexistente ?>
                    <ul class="list-2">
                    <?php foreach ($this->Modelo_resultado->M_lista_carrerasExistentes($areas->id_area_existente) as $carrera): ?>
                      <li><?php echo $carrera->nombre_carrera?></li>
                    <?php endforeach?>
                    </ul>
                  </li>
                <?php endforeach?>
                </ul>
              </td>
              <td>
                <!-- <pre>
                  <?php print_r($this->Modelo_resultado->M_lista_areaDat($value->id_area_existente))?>
                </pre> -->
                <ol class="list-1">
                  <?php foreach ($this->Modelo_resultado->M_lista_areaDat($value->id_area_existente) as $tipodat) {
    switch ($tipodat->id_dat_tipo) {
        case 1:
            ?>
                    <li>
                      <a href="<?php echo base_url(Hasher::make(2553, '1', $idest)) ?>" target="_blank" class="btn-dat"><?=$tipodat->test?></a>
                    </li>
                  <?php break;case 2: ?>
                    <li>
                      <a href="<?php echo base_url(Hasher::make(2553, '2', $idest)) ?>" target="_blank" class="btn-dat"><?=$tipodat->test?></a>
                    </li>
                  <?php break;case 3: ?>
                    <li>
                      <a href="<?php echo base_url(Hasher::make(2553, '3', $idest)) ?>" target="_blank" class="btn-dat"><?=$tipodat->test?></a>
                    </li>
                  <?php break;case 4: ?>
                    <li>
                      <a href="<?php echo base_url(Hasher::make(2553, '4', $idest)) ?>" target="_blank" class="btn-dat"><?=$tipodat->test?></a>
                    </li>
                  <?php break;case 5: ?>
                    <li>
                      <a href="<?php echo base_url(Hasher::make(2553, '5', $idest)) ?>" target="_blank" class="btn-dat"><?=$tipodat->test?></a>
                    </li>
                  <?php break;case 6: ?>
                    <li>
                      <a href="<?php echo base_url(Hasher::make(2553, '6', $idest)) ?>" target="_blank" class="btn-dat"><?=$tipodat->test?></a>
                    </li>
                  <?php break;case 7: ?>
                    <li>
                      <a href="<?php echo base_url(Hasher::make(2553, '7', $idest)) ?>" target="_blank" class="btn-dat"><?=$tipodat->test?></a>
                    </li>
                  <?php break;case 8: ?>
                    <li>
                      <a href="<?php echo base_url(Hasher::make(2553, '8', $idest)) ?>" target="_blank" class="btn-dat"><?=$tipodat->test?></a>
                    </li>
                  <?php break;default: ?>
                  <?php break;}}?>
                </ol>
              </td>
            </tr>
        <?php }?>
      </tbody>
    </table><!--FIN TABLA-->
    <a href="<?php echo base_url(Hasher::make(270)) ?>"><button class="botons" type="submit">FINALIZAR</button></a>
    <form action="<?php echo base_url(Hasher::make(135)) ?>" method="post" target="_blank">
    <?php $value = $this->Modelo_resultado->M_lista_resultado($idest)?>
      <input type="hidden" value="<?=$idest?>" name="id_est">
      <input type="hidden" value="<?=$value[0]->nombre_est?>" name="nombre_est">
      <input type="hidden" value="<?=$value[0]->apellido_est?>" name="apellido_est">
      <input type="submit" class="botons" value="EXPORTAR EN PDF">
    </form>
    </div>
</body>
</html>
<script type="text/javascript">


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