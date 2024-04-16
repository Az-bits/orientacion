<div class="container-fluid">
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">ADMINISTRACION</h4>
            <div class="page-breadcrumb ">
                <!-- ----------------- -->

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-link" href="<?php echo base_url(Hasher::make(61)); ?>">Afirmaciones <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="<?php echo base_url(Hasher::make(65)); ?>">Tipos de inteligencia <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="<?php echo base_url(Hasher::make(67)); ?>">Resultados <span class="sr-only">(current)</span></a>   
                    </div>
                    </div>
                </nav>
                <!-- ----------------- -->
            </div>
        </div>
    </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-uppercase">

                    <div class="media mb-3">
                        <img src="<?php echo base_url() ?>assets/alert/actual.png" class="rounded-circle mr-3 mail-img shadow" alt="media image">
                        <div class="media-body">
                            <span class="media-meta float-right"><?php echo date('H:s a') ?></span>
                            <h4 class="text-primary m-0">ADMIN TEST INTELIGENCIA</h4>
                            <small class="text-muted">Universidad Publica de El Alto</small>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <h4 class="fer_text" align="center">AFIRMACIONES DE TEST DE INTELIGENCIA</h4>
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="<?php echo base_url(Hasher::make(62)) ?>" class="btn btn-primary btn-sm shadow-primary btn-round btn-lg btn-outline-primary waves-effect waves-light m-1">+ Nueva pregunta Test Inteligencia</a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table id="default-datatable" class="table table-bordered">
                                <thead class="table-primary shadow-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>AFIRMACIÓN</th>
                                        <th>TIPO</th>
                                        <th>ACCION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $con = 1;
                                    foreach ($this->Modelo_administracion->listar_preguntas_inteligencia() as $value) {  ?>
                                        <tr>
                                            <td><?php echo $con++; ?></td>

                                            <td><?php echo $value->nom_pregunta2; ?></td>
                                            <td><?php echo $value->nombre_inteligencia; ?></td>
                                            <td>
                                                <a href="<?php echo base_url(Hasher::make(63, $value->idpreguntas2)); ?>" class="btn btn-gradient-scooter waves-effect waves-light m-1"><span class="fa fa-pencil"></span></a>

                                                <button type="button" class="btn btn-gradient-scooter waves-effect waves-light m-1" onclick="eliminar_preguntas('<?php echo $value->idpreguntas2; ?>')"><span class="fa fa-trash-o"></span></button>
                                           </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Row-->

</div>

<script>
   function eliminar_preguntas(idpreguntas2){
  swal({
    title: "ESTA SEGURO QUE DESEA ELIMINAR?",
    text: "UNA VEZ ELIMINADO LA PUBLICACION DEL BLOG, YA NO SE PODRA RECUPERAR",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.post('<?php echo base_url(); ?>Controller_administracion/eliminar_afirmacion_test', {idpreguntas2}, function() {
        alertify.success("<b>Datos enviados...</b>"); 
          swal("NOTA!", "EXITOSAMENTE ELIMINADO LOS DATOS ","success");
          setTimeout(function(){
             window.location='';
        },1000);
      });
    } else {
      swal("NOTA!", "HAS PULSADO CANCELAR!,", "error");
    }
  });
}
</script>