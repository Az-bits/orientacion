<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="Blas Eddy Cruz Mamani">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test de Orientacion Vocacional</title>
  <link href="<?php echo base_url();?>assets_/libs/img/UPEA.png" rel="icon">
  <link rel="stylesheet" href="<?php echo base_url();?>assets_/test/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/libs/css/bootstrap.min.css">
    <!-- Font-Awesome CSS File -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/libs/css/all.min.css">
    <!-- Animate CSS File -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/libs/css/animate.css">
    <!--  Fancy Box CSS File -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/libs/css/jquery.fancybox.min.css">
    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/libs/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
  <div class="form-register text-center">    
        <h1 class="raleway wow fadeInUp" data-wow-delay="400ms"><?php echo $tipo_test->test; ?></h1>
        <br>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: black; color:white; text-align: center">
      <div class="container">
        <?php echo $tipo_test->instrucciones; ?>
        <br>
        <br>
        <h2>Son <?php echo $total_preguntas->total; ?> preguntas con duración del test es de <?php echo fecha_literal($tipo_test->tiempo,7); ?></h2>
        <br>
        <div class="btn-group" role="group" aria-label="Basic example">
          <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2551,$tipo_test->id_dat_tipo,$estudiante->idestudiante))?>">EMPEZAR</a>&nbsp;&nbsp;&nbsp;
          <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="javascript:history.back()">ATRAS</a>
        </div>
        <br>
        <br>
        <br>
        <br>
      </div>

  </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

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
