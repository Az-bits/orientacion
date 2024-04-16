<div class="container-fluid">
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">ADMINISTRACION</h4>
            <div class="page-breadcrumb ">
                <!-- ----------------- -->
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
                            <h4 class="text-primary m-0">ADMIN ESTUDIANTES REGISTRADOS</h4>
                            <small class="text-muted">Universidad Publica de El Alto</small>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <h4 class="fer_text" align="center">NOMINA -REGISTRO DE PERSONAS </h4>
                    <div class="row">
                       

                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table id="default-datatable" class="table table-bordered">
                                <thead class="table-primary shadow-primary">
                                    <tr style="font-size:12px;">
                                        <th>#</th>
                                        <th>CI</th>
                                        <th>NOMBRE</th>
                                        <th>APELLIDO</th>         
                                        <th>MUNICIPIO</th>
                                        <th>PROVINCIA</th>
                                        <th>DEPARTAMENTO</th> 
                                        <th>FECHA DE REGISTRO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $con = 1;
                                    foreach ($this->Modelo_administracion->listar_estudiante() as $value) {  ?>
                                        <tr style="font-size:12px;">
                                            <td><?php echo $con++; ?></td>

                                            <td><?php echo $value->ci_est; ?></td>
                                            <td><?php echo $value->nombre_est; ?></td>
                                            <td><?php echo $value->apellido_est; ?></td>
                                           
                                            
                                            <td><?php echo $value->nombre_municipio; ?></td>
                                            <td><?php echo $value->nombre_provincia; ?></td>
                                            <td><?php echo $value->nombre_departamento; ?></td>
                                            <td><?php echo $value->fecha_reg_est; ?></td>
                                         
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