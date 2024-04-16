<div class="banner_inner text-center">    
    <h1 class="raleway wow fadeInUp" data-wow-delay="400ms">Test de Inteligencias Multiples Howard Gardner</h1>
    <p class="wow fadeInUp font-normal"  data-wow-delay="450ms">Este test fue desarrollado por Howard Gardner que mide 7 tipos de inteligencias, con esto podrás evaluar cuáles de tus inteligencias destacan sobre las otras.
    </p>
    <div class="btn-group" role="group" aria-label="Basic example">
        <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(242))?>">REALIZAR TEST</a>&nbsp;&nbsp;&nbsp;
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