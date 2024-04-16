<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="Blas Eddy Cruz Mamani">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test de Orientacion Vocacional</title>
  <link href="<?php echo base_url(); ?>assets_/libs/img/UPEA.png" rel="icon">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/test/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
  <div class=" form-register text-center">
        <h2 class="raleway wow fadeInUp" data-wow-delay="400ms"><?php echo $estudiante->nombre_est . " " . $estudiante->apellido_est; ?></h2>
        <!-- <h1 class="raleway wow fadeInUp" data-wow-delay="400ms"><?php echo json_encode($resultados); ?></h1> -->
        <!-- <pre style="color:white">
          <?php print_r($resultados)?>
        </pre> -->
        <?php foreach ($resultados as $value) {?>
          <hr><br>
          <h1 class="raleway wow" data-wow-delay="400ms"><?php echo $value["test"]; ?></h1>
          <br>
          <p class="wow fadeInUp font-normal resultado"  data-wow-delay="450ms" style="font-size: 22px;">
            El(La) Candidato(a) obtuvo un resultado de ___<span class="badge bg-<?=$value['escala_msg']?>"><?php echo $value["correctas"] ?> pts</span>___ en la prueba DAT factor de <?php echo $value["test"]; ?><br>
            la persona presenta, en base a sus capacidades lógicas, el siguiente grado de habilidad verbal que se encuentra <br> en un rango ___<span class="badge bg-<?=$value['escala_msg']?>">
            <?php echo strtoupper($value["escala"]) ?></span>
            ___ comparado con el promedio de la población.
          </p><br><br><br><br><br><br><br><br><br><br><br>
          <div style="font-size: 20px;" class="alert alert-<?=$value['escala_msg']?>">
            <?=$value['escala_texto']?>.
            <br>
              <?php echo $value['correctas'] . "/" . $value['total_preguntas'] ?>
          </div>
        <?php }?>

        <a href="<?php echo base_url(Hasher::make(2552, $resultados[0]['idest'])) ?>" class="botons">Realizar otro Test</a>
</div>

</body>
</html>

<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script>
$("#guardar_seguimineto_eva").submit(function(event) {
    event.preventDefault();
    $.ajax({
        url:'<?php echo base_url(Hasher::make(33)) ?>',
        type:'POST',
        data:$("form").serialize(),
        success:function(dat){
              setTimeout(function(){
                   window.location='<?php echo base_url(Hasher::make(37)) ?>';
              },1000);
        }
    });
});

</script>
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
