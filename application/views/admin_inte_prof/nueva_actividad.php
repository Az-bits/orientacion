<div class="container-fluid">
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">ADMINISTRACION</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">ADMINISTRACION</a></li>
                <li class="breadcrumb-item active" aria-current="page">TEST VOCACIONAL / NUEVA PREGUNTA</li>
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
                            <h4 class="text-primary m-0">ADMIN TEST INTERES PROFESIONAL</h4>
                            <small class="text-muted">Universidad Publica de El Alto</small>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <h4 class="fer_text" align="center">NUEVA ACTIVIDAD DE INTERES PROFESIONAL</h4>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-body">
                                        <form id="guardar_nueva_pregunta_test" enctype="multipart/form-data">
                                            <div class="panel-body row">
                                                <div class="col-md-12">
                                                    <div class="form-group ">
                                                        <label>ACTIVIDAD</label>
                                                        <input type="text" class="form-control input-sm" name="pregunta" placeholder="Actividad De Interes Profesional" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group ">
                                                        <label>AREA DE LA PREGUNTA</label>
                                                        <select name="id_area" class="form-control input-sm" required>
                                                            <option></option>
                                                            <?php foreach ($this->db->query("SELECT * FROM area_interes  WHERE estado='1'")->result() as $value) {
                                                                if ($value->idinteres != 0) { ?>
                                                                    <option value="<?php echo $value->idinteres ?>"><?php echo $value->nombre_interes ?></option>
                                                            <?php }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">                          
                                                </div>
                                                <button type="submit" class="btn btn-outline-primary  btn-lg mb-2"><span class="fa fa-save"></span> GUARDAR ACTIVIDAD</button> ||
                                                <a href="<?php echo base_url(Hasher::make(41)); ?>" class="btn btn-outline-danger  btn-lg mb-2"><span class="fa fa-close"></span> CANCELAR</a>
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

<script type="text/javascript" charset="utf-8" async defer>

    $("#guardar_nueva_pregunta_test").submit(function(event) {
        event.preventDefault();
        var formData = new FormData($("#guardar_nueva_pregunta_test")[0]);
        $("#cargar_datos").modal({
            backdrop: 'static',
            keyboard: false
        });
        $.ajax({
            url: '<?php echo base_url(); ?>Controller_administracion/guardar_nueva_actividad_test',
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function() {
                alertify.success("<b>Datos enviados...</b>");
                swal("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS ", "success");
                setTimeout(function() {
                    window.location = '<?php echo base_url(Hasher::make(41)); ?>';
                }, 1000);
            }
        });
    });
</script>