<div class="container-fluid">
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">ADMINISTRACION</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">ADMINISTRACION</a></li>
                <li class="breadcrumb-item active" aria-current="page">ADMINISTRACIÓN COLEGIOS / EDITAR</li>
            </ol>
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
                            <h4 class="text-primary m-0">UPEA PAGINA ADMIN</h4>
                            <small class="text-muted">Universidad Publica de El Alto</small>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <h4 class="fer_text" align="center">EDITAR COLEGIO</h4>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" action="<?php echo base_url(Hasher::make(28)) ?>" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $obj->id_colegio?>">
                                        <div class="panel-body row">
                                                <div class="col-md-12">
                                                    <div class="form-group ">
                                                        <label>.:: NOMBRE DE COLEGIO ::.</label>
                                                        <input type="text" class="form-control input-sm" name="nombre_colegio" placeholder="Nombre de colegio" value="<?php echo $obj->nombre_colegio ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group ">
                                                        <label>ESTADO</label>
                                                        <select name="estado" id="estado" class="form-control">
                                                            <option value="ACTIVO" <?php if ($obj->estado_colegio == "ACTIVO") { echo 'selected'; } ?>>ACTIVO</option>
                                                            <option value="INACTIVO" <?php if ($obj->estado_colegio == "INACTIVO") { echo 'selected'; } ?>>INACTIVO</option>
                                                        </select>
                                                       
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-12">
                                                    <div class="form-group ">
                                                        <label>MUNICIPIO</label>
                                                        <input type="text" class="form-control input-sm" name="link" placeholder="Pregunta de Test vocacional" value="<?php echo $obj->acceso ?>" required>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-12">
                                                </div>
                                                <button type="submit" class="btn btn-outline-primary  btn-lg mb-2"><span class="fa fa-save"></span> GUARDAR CAMBIOS</button> ||
                                                <a href="<?php echo base_url(Hasher::make(28)); ?>" class="btn btn-outline-primary  btn-lg mb-2"><span class="fa fa-close"></span> SALIR</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Row-->
                </div>
            </div>
        </div>
    </div><!-- End Row-->

</div>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/assets/plugins/summernote/dist/summernote-bs4.css" />
<script src="<?php echo base_url(); ?>assets/admin/assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
<script>
    $('.summernoteEditor').summernote({
        height: 400,
        tabsize: 2
    });
</script>

<!-- <script type="text/javascript" charset="utf-8" async defer>

    $("#guardar_editar_colegio").submit(function(event) {
        event.preventDefault();
        var formData = new FormData($("#guardar_editar_colegio")[0]);
        $("#cargar_datos").modal({
            backdrop: 'static',
            keyboard: false
        });
        $.ajax({
            url: '<?php echo base_url(); ?>Controller_administracion/guardar_editar_acceso',
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function() {
                alertify.success("<b>Datos enviados...</b>");
                swal("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS ", "success");
                setTimeout(function() {
                    window.location = '<?php echo base_url(Hasher::make(48)); ?>';
                }, 1000);
            }
        });
    });
</script> -->

<!-- <script type="text/javascript">
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
    </script> -->