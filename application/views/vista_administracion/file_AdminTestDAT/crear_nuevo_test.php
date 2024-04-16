    <?php //print_r($id_curso); ?>
    <?php //print_r($base_upea); ?>
    <div class="container-fluid">
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">ADMINISTRACION</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">ADMINISTRACION</a></li>
            <li class="breadcrumb-item active" aria-current="page">TEST /  <?php echo $id_test->test; ?></li>
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


            <div class="row">
                <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <h2 class="fer_text" align="center">CREAR NUEVO PREGUNTA</h2>
                    <form id="guardar_nuevo_pregunta" enctype="multipart/form-data">

                        <input type="hidden" name="id_dat_tipo" value="<?php echo $id_test->id_dat_tipo; ?>" >
                        <div class="panel-body row">
                        <div class="col-md-10">
                            <div class="form-group ">
                            <label>IMAGEN DE PORTADA (2000x1500)</label>
                            <input type="file" class="form-control nuevaFoto1" name="imagen" accept=".jpg, .jpeg, .png, .gif">
                            <span id="error_img1"></span>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-group">
                            <label for="input-1">VISUALIZAR</label>
                            <p><img width="70" height="60" class="visualizar1" src="<?php echo base_url(); ?>assets/alert/unnamed.png"></p>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group ">
                            <label>PREGUNTA</label>
                            <textarea class="form-control summernoteEditor " name="b_titulo" placeholder="Ingresar datos..." ></textarea>    
                        </div>
                        </div>
                        <button type="submit" class="btn btn-outline-primary  btn-lg mb-2"><span class="fa fa-save"></span> GUARDAR DATOS</button> ||
                        <a href="<?php echo base_url(Hasher::make(910));?>" class="btn btn-outline-primary  btn-lg mb-2"><span class="fa fa-close"></span> SALIR</a>
                        </div>
                    </form>
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
    <script type="text/javascript">
    function valideKey(evt) {

        // code is the decimal ASCII representation of the pressed key.
        var code = (evt.which) ? evt.which : evt.keyCode;

        if (code == 8) { // backspace.
        return true;
        } else if (code >= 48 && code <= 57) { // is a number.
        return true;
        } else { // other keys.
        return false;
        }
    }
    </script>
    <script type="text/javascript">

    </script>
    <script type="text/javascript" charset="utf-8" async defer>

    let id = <?php echo $id_test->id_dat_tipo; ?> 
    $(".nuevaFoto1").change(function() {
        var imagen = this.files[0];
        if (imagen["type"] != "image/jpeg" &&
        imagen["type"] != "image/png" &&
        imagen["type"] != "image/gif" &&
        imagen["type"] != "image/jpg") {
        $(".nuevaFoto1").val('');
        $("#error_img1").html('<b style="color:#ff0000;">Formato invalido...</b>');
        $(".visualizar1").attr("src", '<?php echo base_url(); ?>assets/logos/imagen_no.jpg');
        } else {
        if (imagen['size'] > 5000000) {
            $(".nuevaFoto1").val('');
            $("#error_img1").html('<b style="color:#ff0000;">Imagen exede de 5 mg...</b>');
        } else {
            $("#error_img1").html('');
            var datosImagen = new FileReader;
            datosImagen.readAsDataURL(imagen);
            $(datosImagen).on("load", function(event) {
            var rutaImagen = event.target.result;
            $(".visualizar1").attr("src", rutaImagen);
            });
        }
        }
    });
    $("#guardar_nuevo_pregunta").submit(function(event) {
        event.preventDefault();
        var formData = new FormData($("#guardar_nuevo_pregunta")[0]);
        $("#cargar_datos").modal({
        backdrop: 'static',
        keyboard: false
        });
        $.ajax({
            url: '<?php echo base_url(); ?>Controller_administracion/guardar_nuevo_pregunta',
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function() {
                alertify.success("<b>Datos enviados...</b>");
                swal("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS ", "success");
                setTimeout(function() {
                window.location = '<?php echo base_url(Hasher::make(930,$id_test->id_dat_tipo)); ?>';
                //window.location='';
                }, 1000);
            }
        });
    });


    function soloNumeros(e)
    {
        var key = window.Event ? e.which : e.keyCode
        return ((key >= 48 && key <= 57) || (key==8))
    }
    
    </script>