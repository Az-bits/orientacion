<div class="banner_inner text-center">    
    <h1 class="raleway wow fadeInUp" data-wow-delay="400ms">Hola <?php echo $estudiante->nombre_est ?> pon a prueba tus aptitudes</h1>
    <!-- <p class="wow fadeInUp font-normal"  data-wow-delay="450ms">
      Los Tests de Aptitudes Diferenciales (DAT) han sido diseñados para medir la capacidad de los estudiantes para aprender o para actuar eficazmente en un
      cierto número de áreas tales como las del razonamiento mecánico, verbal, numérico o de las relaciones espaciales. Aunque elaborados inicialmente para
      su aplicación en los centros de enseñanza media, también se han utilizado en el consejo educativo y vocacional de adultos así como en la selección de 
      empleados. Tanto los asesores como los profesores han sido muy sensibles a la necesidad de medir diferentes tipos de aptitudes con objeto de descubir
      el potencial de los estudiantes para desarrollar con éxito su actividad académica o profesional.   
    </p> -->
    <br><br>
    <h3 class="raleway wow fadeInUp" data-wow-delay="400ms">PARTE 1</h3>
    <div class="btn-group" role="group" aria-label="Basic example">
        <?php 
        if(!empty($razonamiento_verbal->id_dat_tipo)){?>
          <a class="button raleway btn_gradient wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2518,$estudiante->idestudiante))?>">RAZONAMIENTO VERBAL</a>&nbsp;&nbsp;&nbsp;
        <?php }else{ ?>
          <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2553,'1',$estudiante->idestudiante))?>">RAZONAMIENTO VERBAL</a>&nbsp;&nbsp;&nbsp;
        <?php } ?>
        <?php if(!empty($razonamiento_numerico->id_dat_tipo)){?>
          <a class="button raleway btn_gradient wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2518,$estudiante->idestudiante))?>">RAZONAMIENTO NÚMERICO</a>&nbsp;&nbsp;&nbsp;
        <?php }else{ ?>
          <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2553,'2',$estudiante->idestudiante))?>">RAZONAMIENTO NÚMERICO</a>&nbsp;&nbsp;&nbsp;
        <?php } ?>
        <?php if(!empty($razonamiento_abstracto->id_dat_tipo)){?>
          <a class="button raleway btn_gradient wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2518,$estudiante->idestudiante))?>">RAZONAMIENTO ABSTRACTO</a>&nbsp;&nbsp;&nbsp;
        <?php }else{ ?>
          <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2553,'3',$estudiante->idestudiante))?>">RAZONAMIENTO ABSTRACTO</a>&nbsp;&nbsp;&nbsp;
        <?php } ?>
        
    </div>
    <br><br>
    <h3 class="raleway wow fadeInUp" data-wow-delay="400ms">PARTE 2</h3>
    <div class="btn-group" role="group" aria-label="Basic example">
        <?php if(!empty($razonamiento_mecanico->id_dat_tipo)){?>
          <a class="button raleway btn_gradient wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2518,$estudiante->idestudiante))?>">RAZONAMIENTO MECÁNICO</a>&nbsp;&nbsp;&nbsp;
        <?php }else{ ?>
          <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2553,'4',$estudiante->idestudiante))?>">RAZONAMIENTO MECÁNICO</a>&nbsp;&nbsp;&nbsp;
        <?php } ?>
        <?php if(!empty($relaciones_espaciales->id_dat_tipo)){?>
          <a class="button raleway btn_gradient wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2518,$estudiante->idestudiante))?>">RELACIONES ESPACIALES</a>&nbsp;&nbsp;&nbsp;
        <?php }else{ ?>
          <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2553,'5',$estudiante->idestudiante))?>">RELACIONES ESPACIALES</a>&nbsp;&nbsp;&nbsp;
        <?php } ?>
        <?php if(!empty($ortografia->id_dat_tipo)){?>
          <a class="button raleway btn_gradient wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2518,$estudiante->idestudiante))?>">ORTOGRAFÍA</a>&nbsp;&nbsp;&nbsp;
        <?php }else{ ?>
          <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2553,'6',$estudiante->idestudiante))?>">ORTOGRAFÍA</a>&nbsp;&nbsp;&nbsp;
        <?php } ?>
      </div>
      <h3 class="raleway wow fadeInUp" data-wow-delay="400ms">----------------------------------------------------------------</h3>
      <br>
      <div class="btn-group" role="group" aria-label="Basic example">
        <?php if(!empty($rapidez_exactitud_i->id_dat_tipo)){?>
          <a class="button raleway btn_gradient wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2518,$estudiante->idestudiante))?>">RAPIDEZ Y EXACTITUD PERCEPTIVA PARTE I</a>&nbsp;&nbsp;&nbsp;
        <?php }else{ ?>
          <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2553,'7',$estudiante->idestudiante))?>">RAPIDEZ Y EXACTITUD PERCEPTIVA PARTE I</a>&nbsp;&nbsp;&nbsp;
        <?php } ?>
        <?php if(!empty($rapidez_exactitud_ii->id_dat_tipo)){?>
          <a class="button raleway btn_gradient wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2518,$estudiante->idestudiante))?>">RAPIDEZ Y EXACTITUD PERCEPTIVA PARTE II</a>&nbsp;&nbsp;&nbsp;
        <?php }else{ ?>
          <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="100ms" href="<?php echo base_url(Hasher::make(2553,'8',$estudiante->idestudiante))?>">RAPIDEZ Y EXACTITUD PERCEPTIVA PARTE II</a>&nbsp;&nbsp;&nbsp;
        <?php } ?>
        
    </div>
      <br><br>
      <div class="btn-group" role="group" aria-label="Basic example">
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