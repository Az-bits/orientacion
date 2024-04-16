<div class="banner_inner text-center">    
    <h1 class="raleway wow fadeInUp" data-wow-delay="400ms">Test de Aptitudes Diferentes</h1>
    <p class="wow fadeInUp font-normal"  data-wow-delay="450ms">
      Los Tests de Aptitudes Diferenciales (DAT) han sido diseñados para medir la capacidad de los estudiantes para aprender o para actuar eficazmente en un
      cierto número de áreas tales como las del razonamiento mecánico, verbal, numérico o de las relaciones espaciales. Aunque elaborados inicialmente para
      su aplicación en los centros de enseñanza media, también se han utilizado en el consejo educativo y vocacional de adultos así como en la selección de 
      empleados. Tanto los asesores como los profesores han sido muy sensibles a la necesidad de medir diferentes tipos de aptitudes con objeto de descubir
      el potencial de los estudiantes para desarrollar con éxito su actividad académica o profesional.   
    </p>
    
    <div class="btn-group" role="group" aria-label="Basic example">
        <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2460))?>">REALIZAR TEST</a>&nbsp;&nbsp;&nbsp;
        <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(270))?>">SALIR</a>
    </div>
</div>
<script type="text/javascript">//<![CDATA[


function checkDevTools() {
  // Iniciar cronómetro
    var time_start = (new Date()).getTime();

  // Pausar ejecución
  // debugger;

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