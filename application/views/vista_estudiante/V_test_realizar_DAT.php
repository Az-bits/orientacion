<?php
$ci = &get_instance();
$ci->load->model('Modelo_configuracion');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="Blas Eddy Cruz Mamani">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test de Orientacion Vocacional</title>
  <link href="<?php echo base_url(); ?>assets_/libs/img/UPEA.png" rel="icon">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/test/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/libs/css/bootstrap.min.css">
    <!-- Font-Awesome CSS File -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/libs/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/assets/css/tiempo.css">
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

  <div class="form-register text-center">
        <h1 class="raleway wow fadeInUp" data-wow-delay="400ms"><?php echo $tipo_test->test; ?></h1>
        <br>
        <div class="cont-temporizador">
          <div class="bloque">
              <div class="minutos" id="minutos">--</div>
              <p>MINUTOS</p>
          </div>
          <div class="bloque">
              <div class="segundos" id="segundos">--</div>
              <p>SEGUNDOS</p>
          </div>
        </div>
    </div>

  </div>

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: black; color:white; text-align: center">
    <br>
    <form class="form-register" action="<?php echo base_url(Hasher::make(2554)) ?>" method="POST">
      <div class= "row justify-content-center align-items-center gy-5 gx-5" style ="margin-left: auto, margin-right: auto">

            <?php $con = 1;
            foreach ($list_preguntas as $value) {?>
                <div class = "col-12 col-md-6 col-xl-4">
                    <input type="hidden" name="idpreg[]" value="<?php echo $value->id_test; ?>">
                    <input type="hidden" name="idestudiante" value="<?php echo $estudiante->idestudiante; ?>">
                    <input type="hidden" name="id_dat_tipo" value="<?php echo $tipo_test->id_dat_tipo; ?>">
                    <span style="padding:10px 20px;position:relative;margin-top:10px;border:1px solid white;border-radius:50px;">.:: &nbsp;<?php echo $con; ?>&nbsp; ::.</span>
                    <br>
                    <?php if ($value->imagen != null) {?>
                      <br>
                      <img width="50%" src="<?php echo base_url() . "assets/img_test/" . $value->imagen; ?>">
                      <?php }?>
                      <br>
                      <span><?php echo $value->pregunta; ?></span>
                      <?php $con++;?>
                    <table border="1" id="" class="" style="border-color:cyan;border-spacing:0px; width:100%">
                        <tbody>
                          <tr>
                                <?php $resultado = $ci->Modelo_configuracion->tabla_result_sys_random('dat_pregunta', 'id_dat_test', $value->id_test);

                                foreach ($resultado as $respuesta) {?>
                                    <br><br>
                                    <td align="center">
                                        <input type="radio" style="width: 20px; height: 20px; border-radius: 100px; accent-color: red;?>" name="<?php echo $value->id_test; ?>" value="<?php echo $respuesta->id_pregunta; ?>">
                                        <?php if ($respuesta->foto != null) {?>
                                            <img width="100%" src="<?php echo base_url() . "assets/img_test/respuestas/" . $respuesta->foto; ?>">
                                        <?php }?>
                                        <?php echo $respuesta->texto; ?>
                                        <br>
                                    </td>

                                <?php }?>
                                </tr>
                        </tbody>
                    </table>
                    <br>
                    <hr>
                    <br>
                </div>
            <?php }?>




        </div>
        <br>
            <br>
        <div class="btn-group" role="group" aria-label="Basic example">
          <!-- <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2553, '6', $estudiante->idestudiante)) ?>">EMPESAR</a>&nbsp;&nbsp;&nbsp; -->
          <!-- <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="javascript:history.back()">FINALIZAR</a> -->
          <input class="botons" type="submit" value="FINALIZAR">
        </div>
        <br>
        <br>
        <br>
        <br>
    </form>
  </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

<script type="text/javascript">//<![CDATA[

let horas = "<?php echo date('G', strtotime($tipo_test->tiempo)); ?>";
let minutos = "<?php echo ltrim(date('i', strtotime($tipo_test->tiempo)), "0"); ?>";
let segundos = 0;
let nIntervId;
cargarSegundo();

//Definimos y ejecutamos los segundos
function cargarSegundo(){
    let txtSegundos;

    if(segundos < 0){
        segundos = 59;
    }

    //Mostrar Segundos en pantalla
    if(segundos < 10){
        txtSegundos = `0${segundos}`;
    }else{
        txtSegundos = segundos;
    }
    document.getElementById('segundos').innerHTML = txtSegundos;
    segundos--;


    if(horas==='0' && minutos === 0 && segundos === -1){
        clearInterval(nIntervId);
        nIntervId = null;
        location.href= "<?php echo base_url(Hasher::make(2552, $estudiante->idestudiante)) ?>";
    }
    // console.log(horas+":"+minutos+":"+segundos+"   " + nIntervId);
    cargarMinutos(segundos);
}

//Definimos y ejecutamos los minutos
function cargarMinutos(segundos){
    let txtMinutos;

    if(segundos == -1 && minutos !== 0){
        setTimeout(() =>{
            minutos--;
        },500)
    }else if(segundos == -1 && minutos == 0){
        setTimeout(() =>{
            minutos = 59;
        },500)
    }

    //Mostrar Minutos en pantalla
    if(minutos < 10){
        txtMinutos = `0${minutos}`;
    }else{
        txtMinutos = minutos;
    }
    document.getElementById('minutos').innerHTML = txtMinutos;
    // cargarHoras(segundos,minutos);
}

//Definimos y ejecutamos las horas
// function cargarHoras(segundos,minutos){
//     let txtHoras;

//     if(segundos == -1 && minutos == 0 && horas !== 0){
//         setTimeout(() =>{
//             horas--;
//         },500)
//     }else if(segundos == -1 && minutos == 0 && horas == 0){
//         setTimeout(() =>{
//             horas = 2;
//         },500)
//     }

//     //Mostrar Horas en pantalla
//     if(horas < 10){
//         txtHoras = `0${horas}`;
//     }else{
//         txtHoras = horas;
//     }
//     document.getElementById('horas').innerHTML = txtHoras;
// }


    if (!nIntervId) {
        nIntervId = setInterval(cargarSegundo, 1000);
    }



function checkDevTools() {
  // Iniciar cronómetro
    var time_start = (new Date()).getTime();

  // Pausar ejecución
//   debugger;

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
