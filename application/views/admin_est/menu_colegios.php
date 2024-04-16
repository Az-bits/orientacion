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
                        <a class="nav-link" href="<?php echo base_url(Hasher::make(30)); ?>">Menu de Colegios <span class="sr-only">(current)</span></a>

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
                            <span class="media-meta float-right"><?php echo date('H:i a') ?></span>
                            <h4 class="text-primary m-0">ADMIN TEST VOCACIONAL</h4>
                            <small class="text-muted">Universidad Publica de El Alto</small>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <h4 class="fer_text" align="center">ADMINISTRACIÓN DE COLEGIOS </h4>

                    <div class="row">
                        <button type="button" class="btn btn-primary shadow-primary btn-round btn-lg btn-outline-primary btn-round waves-effect waves-light m-1" data-toggle="modal" data-target="#nuevo_col"><span class="fa fa-plus"></span> NUEVO COLEGIO</button>
                        <div class="table-responsive">
                            <table id="default-datatable" class="table table-bordered">
                                <thead class="table-primary shadow-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>NOMBRE DE COLEGIO</th>
                                        <th>ESTADO</th>
                                        <th>ACCIÓN</th>
                                    </tr>
                                </thead>
                                <script>console.log(<?php echo json_encode($this->Modelo_administracion->listar_colegios()) ?>)</script>
                                <tbody>
                                    <?php $con = 1;
foreach ($this->Modelo_administracion->listar_colegios() as $value) {?>
                                        <tr>
                                            <td><?php echo $con++; ?></td>

                                            <td><?php echo $value->nombre_colegio; ?></td>
                                            <td>
                                            <?php if ($value->estado_colegio == 'ACTIVO') {?>
                                            <span class="badge bg-success text-white">
                                                <?php echo $value->estado_colegio; ?>
                                            </span>
                                            <?php } else {?>
                                                <span class="badge bg-danger text-white">
                                                <?php echo $value->estado_colegio; ?>
                                            </span>
                                            <?php }?>
                                            </td>


                                            <td>
                                                <div class="btn-group m-1" role="group">
                                                <button type="button" class="btn btn-outline-primary waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    ACCIÓN
                                                </button>
                                                <div class="dropdown-menu" style="">
                                                    <a href="<?php echo base_url(Hasher::make(50, $value->id_colegio)); ?>" class="dropdown-item"><span class="fa fa-pencil"></span> EDITAR</a>
                                                    <a href="javaScript:void();" onclick="cambiar_estado_col('<?php echo $value->id_colegio; ?>','<?php echo $value->estado_colegio; ?>')" class="dropdown-item"><span class="fa fa-power-off"></span> ESTADO</a>
                                                    <div class="dropdown-divider"></div>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Row-->

</div>


<div class="modal fade" id="nuevo_col">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-primary animated bounceIn">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white fer_text"><i class="fa fa-star"></i> NUEVO COLEGIO</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="nuevo-colegio" method="post" accept-charset="utf-8" action="<?php echo base_url(Hasher::make(26)) ?>">
              <div style="text-align: center">
               <h4>REGISTRAR NUEVA UNIDAD EDUCATIVA</h4>
              </div>
              <div class="row">
              <div class="col-md-12">
                    <div class="form-group ">
                        <label class="fg-cobalt">.::: NOMBRE DE COLEGIO :::.</label>
                        <input type="text" name="txtcolegio" id="txtcolegio" class="form-control">
                      </div>
                  </div>
                <div class="form-group col-12 col-md-4">
                    <label>DEPARTAMENTO</label>
                    <select id="txtDepartamento" name="txtDepartamento" class="controls form-control">
                        <option>Departamento...</option>

                        <?php foreach ($this->db->query("SELECT * FROM departamento WHERE estado_departamento = 'ACTIVO'")->result() as $value) {

    if ($value->id_departamento != 0) {?>
                            <option value="<?php echo $value->id_departamento ?>"><?php echo $value->nombre_departamento ?></option>
                        <?php }
}?>
                    </select>
                </div>
                <div class="form-group col-12 col-md-4">
                    <label>PROVINCIA</label>
                    <select id="txtProvincia" name="txtProvincia" class="controls form-control">
                        <option value="0">Provincia</option>
                    </select>
                </div>
                <div class="form-group col-12 col-md-4">
                    <label>MUNICIPIO</label>
                    <select id="txtMunicipio" name="txtMunicipio" class="controls form-control">
                        <option value="0">Municipio</option>
                    </select>
                </div>
</div>

                   <div class="col-lg-12">
                    <div id="datos_tablas">

                    </div>
                  </div>

              <div class="modal-footer">
                <button type="submit" id="boton" class="btn btn-primary"><i class="fa fa-check-square-o"></i> GUARDAR DATOS</button>
                <button type="button" class="btn btn-inverse-primary" data-dismiss="modal"><i class="fa fa-times"></i> CANCELAR</button>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>

<script>
   function eliminar_pregunta(idpreguntas){
  swal({
    title: "ESTA SEGURO QUE DESEA ELIMINAR?",
    text: "UNA VEZ ELIMINADO LA PUBLICACION DEL BLOG, YA NO SE PODRA RECUPERAR",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.post('<?php echo base_url(); ?>Controller_administracion/eliminar_pregunta_test', {idpreguntas}, function() {
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

<script type="text/javascript">
      $(document).ready(function() {
        $("#txtDepartamento").change(function() {
          $("#txtDepartamento option:selected").each(function() {
            id_departamento = $('#txtDepartamento').val();
            $.post('<?php echo base_url(); ?>Controller_estudiante/departamento', {
              id_departamento: id_departamento
            }, function(data) {
              $("#txtProvincia").html(data);
            });
          });
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#txtProvincia").change(function() {
          $("#txtProvincia option:selected").each(function() {
            id_provincia = $('#txtProvincia').val();
            $.post('<?php echo base_url(); ?>Controller_estudiante/provincia', {
              id_provincia: id_provincia
            }, function(data) {
              $("#txtMunicipio").html(data);
            });
          });
        });
      });
    </script>
        <script type="text/javascript">
      $(document).ready(function() {
        $("#txtMunicipio").change(function() {
          $("#txtMunicipio option:selected").each(function() {
            id_municipio = $('#txtMunicipio').val();
            $.post('<?php echo base_url(); ?>Controller_estudiante/municipio', {
              id_municipio: id_municipio
            }, function(data) {
              $("#txtColegio").html(data);
            });
          });
        });
      });
    </script>

    <script>
      function cambiar_estado_col(id_colegio,estado){
    $.post('<?php echo base_url(); ?>Controller_sistema/cambiar_estado_col', {id_colegio,estado}, function(d) {
      alertify.success("<b>Datos enviados...</b>");
      alertify.alert("<b style='color: #008000;'>EXITOSAMENTE MODIFICADO EL ESTADO</b> ", function () {
        window.location='';
      });
    });
  }
    </script>