<div class="banner_inner text-center">    
    <h1 class="raleway wow fadeInUp" data-wow-delay="400ms">Test de Intereses Profesionales Kuder</h1>
    <p class="wow fadeInUp font-normal"  data-wow-delay="450ms">Presentaremos a UD. una lista de actividades u ocupaciones por realizar. Las preguntas serán contestadas en las celdas de color amarillo, seleccionando una frase en el recuadro correspondiente de cada una de las 6O actividades laborales presentadas, de acuerdo a su gusto o desagrado, usandose la siguiente escala preferencial:  
    </p>
    <p>Me desagrada mucho<br>No me gusta <br>Me es indiferente <br>Me gusta <br>Me gusta mucho </p>
    <div class="btn-group" role="group" aria-label="Basic example">
        <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(245))?>">REALIZAR TEST</a>&nbsp;&nbsp;&nbsp;
        <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(270))?>">SALIR</a>
    </div>
</div>
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