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
  <form class="form-register" action="<?php echo base_url(Hasher::make(33)) ?>" method="POST">
    <!-- <form class="form-register" id="guardar_seguimineto_eva" method="POST"> -->
    <div style="text-align: center">
      <h3>TEST DE ORIENTACIÓN VOCACIONAL -CHASIDE</h3>
    </div>
    <h5 style="width:80%;margin:auto;max-width:800px;"><br> I) Lee atentamente cada pregunta. <br> II) Seleciona "SI" si tu respuesta es afirmativa, caso contrario selecciona "NO". <br> III) Responde a todas las preguntas sin omitir ninguna.</h5>
    <table border="1" id="" class="" style="border-color:cyan;border-spacing:0px; width:90%;margin:auto;max-width:900px;font-size:17px;"><br>
      <thead>
        <tr style="color:cyan">
          <th>#</th>
          <th>Pregunta</th>
          <th>Respuesta</th>
        </tr>
      </thead>
      <tbody>
        <?php $con = 1;
        foreach ($listar as $value) { ?>
          <tr>
            <input type="hidden" name="idest" value="<?php echo $idest; ?>">
            <input type="hidden" name="idpreg[]" value="<?php echo $value->idpreguntas; ?>">
            <td><?php echo $value->idpreguntas; ?></td>
            <td><?php echo $value->nom_pregunta; ?></td>
            <td align="center">
              <label><input style="height:15px; width:15px" type="radio" name="respuesta<?php echo $value->idpreguntas; ?>" required value="1"> SI</label><br>
              <label><input style="height:15px; width:15px" type="radio" name="respuesta<?php echo $value->idpreguntas; ?>" required value="0"> NO</label>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table><!--FIN TABLA-->
    <input class="botons" type="submit" value="VER RESULTADO">
  </form>
  <form class="form-register" method="POST" action="<?php echo base_url(Hasher::make(270)) ?>">
    <input style="background-color: green; margin: 0px" class="botons" type="submit" value="VOLVER A INICIO">
  </form>

</body>

</html>

<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script>
  $("#guardar_seguimineto_eva").submit(function(event) {
    event.preventDefault();
    $.ajax({
      url: '<?php echo base_url(Hasher::make(33)) ?>',
      type: 'POST',
      data: $("form").serialize(),
      success: function(dat) {
        setTimeout(function() {
          window.location = '<?php echo base_url(Hasher::make(37)) ?>';
        }, 1000);
      }
    });
  });
</script>
<script type="text/javascript">
  //<![CDATA[


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


  //]]>
</script>