    <?php //print_r($consulta); ?>

    <div class="container-fluid">
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">ADMINISTRACION</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">ADMINISTRACION</a></li>
            <li class="breadcrumb-item active" aria-current="page">DETALLES <?php echo $consulta->test; ?></li>
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
            
            <div class="card-header "><a href="<?php echo base_url(Hasher::make(910));?>" class="btn btn-danger btn-md shadow-danger btn-round btn-outline-danger waves-effect"><i class="fa fa-mail-reply-all"></i> Atras</a></div>

            <h3 class="fer_text" align="center">DETALLE DE <?php echo $consulta->test;?></h3>
            <div class="row">
                <div class="col-lg-3">
                <!--<a href="<?php //echo base_url() ?>nuevoTest" class="btn btn-outline-primary btn-square waves-effect waves-light m-1">Nuevo curso</a>-->

                

                

                <a type="button" href="<?php echo base_url(Hasher::make(920,$consulta->id_dat_tipo));  ?>" class="btn btn-gradient-scooter waves-effect waves-light m-1">Nuevo <?php echo  $consulta->test; ?></a>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                <table id="default-datatable" class=" table-bordered" style="width:100%;">
                    <thead class="table-primary shadow-primary">
                    <tr>
                        <th>#</th>
                        <th>PORTADA</th>
                        <th>PREGUNTA</th>
                        <th>RESPUESTA</th>
                        <th>ESTADO</th>
                        <th>ACCION</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $con = 1;
                    $id=$consulta->id_dat_tipo;
                    foreach ($this->Modelo_administracion->listar_test_pregunta($id) as $value) {    ?>
                        <tr style="font-size:10px;">
                        <td><?php echo $con++; ?></td>
                        <td><a target="_blank" href="<?php 
                            if($value->imagen != NULL) {
                                echo base_url()."assets/img_test/".$value->imagen;
                            }
                            else{
                                echo base_url()."assets/sinimagen.png";
                            }
                            ?>"><img width="150" src="<?php 
                            if($value->imagen != NULL) {
                                echo base_url()."assets/img_test/".$value->imagen;
                            }
                            else{
                                echo base_url()."assets/sinimagen.png";
                            }
                            ?>"></a></td>
                        <td><?php echo $value->pregunta; ?></td>



                        <td>
                            <button  type="button" onclick="agregar_respuestas('<?php echo $value->id_test;?>')" class="btn btn-gradient-scooter waves-effect waves-light m-1 btn-sm"><span class="fa fa-pencil"></span></button>
                            <br>   <br>   
                            <?php foreach ($this->Modelo_administracion->listar_test_respuestas($value->id_test) as $respue) { ?>
                              
                                <?php if ($respue->valor == '1') {
                                    $valor = 1; ?>
                                    <input type="checkbox" checked onchange="valor('<?php echo $respue->id_pregunta; ?>','<?php echo $valor; ?>')" data-color="#15ca20" />
                                <?php } else {
                                    $valor = 0; ?>
                                    <input type="checkbox"  onchange="valor('<?php echo $respue->id_pregunta; ?>','<?php echo $valor; ?>')" data-color="#15ca20" />
                                <?php } ?>
                                <?php if($respue->foto != NULL) {?>
                
                                    <a target="_blank" href="<?php echo base_url()."assets/img_test/respuestas/".$respue->foto; 
                                        ?>"><img width="150" src="<?php 
                                            echo base_url()."assets/img_test/respuestas/".$respue->foto;
                                        ?>">
                                    </a><br>
                                <?php } ?>
                                    <?php echo $respue->texto; ?>
                            
                            <?php } ?>
                            
                        </td>
                        
                        
                        
                        <td>
                            
                            <?php if ($value->estado == 'ACTIVO') {
                            $estado = 1; ?>
                            <input type="checkbox" checked class="js-switch" onchange="estado_datos('<?php echo $value->id_test; ?>','<?php echo $estado; ?>')" data-color="#15ca20" />
                            <?php } else {
                            $estado = 0; ?>
                            <input type="checkbox" class="js-switch" onchange="estado_datos('<?php echo $value->id_test; ?>','<?php echo $estado; ?>')" data-color="#15ca20" />
                            <?php } ?>
                        </td>
                        <td>
                            <?php if($value->estado=='ACTIVO'){ ?>
                                <!--boton editar-->
                                <button  type="button" onclick="editar_pregunta('<?php echo $value->id_test;?>')" class="btn btn-gradient-scooter waves-effect waves-light m-1 btn-sm"><span class="fa fa-pencil"></span></button>
                                <button  type="button" onclick="eliminar_pregunta('<?php echo $value->id_test;?>')" class="btn btn-outline-danger btn-sm waves-effect waves-light m-1"><span class="fa fa-close"></span></button>

                               
                                <!--boton para exportar para crear grupo-->

                            <?php } ?>
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
    </div>

    </div>


    <!--MOODAL DE EDITAR-->
    <div class="modal fade bd-example-modal-xl" id="modal_editar">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content border-primary animated bounceIn">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white fer_text"><i class="fa fa-star"></i> EDITAR DATOS DE LA PREGUNTA</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="vista_editar" >
            
          </div>
        </div>
    </div>
    
</div>

<!--MOODAL DE AGREGAR-->
<div class="modal fade bd-example-modal-x" id="modal_guardar_pregunta">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content border-primary animated bounceIn">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white fer_text"><i class="fa fa-star"></i> AGREGAR RESPUESTA</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="vista_agregar_respuesta" >
            
          </div>
        </div>
    </div>
</div>



    <script>


//me deve ir al controlador

    function editar_pregunta(id) {
        
        $("#modal_editar").modal('show');
        $.post('<?php echo base_url();?>Controller_administracion/editarpregunta', {
            id
        }, function(data) {
            $("#vista_editar").html(data)
        });
    }
    function eliminar_pregunta(id_test) {
        swal({
      title: "ESTA SEGURO QUE DESEA ELIMINAR?",
      text: "UNA VEZ ELIMINADO LA PUBLICACION DE LA SECCION COVOCATORIA, YA NO SE PODRA RECUPERAR",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.post('<?php echo base_url(); ?>Controller_administracion/eliminarpregunta', {
        id_test
        }, function() {
        window.location = '';
        });
    } else {
        swal("NOTA!", "HAS PULSADO CANCELAR!,", "error");
      }
    });
    }
    function agregar_respuestas(id) {
        
        $("#modal_guardar_pregunta").modal('show');
        $.post('<?php echo base_url();?>Controller_administracion/agregarRespuestas', {
            id
        }, function(data) {
            $("#vista_agregar_respuesta").html(data)
        });
    }

    function estado_datos(id_test, estado) {
        $.post('<?php echo base_url(); ?>Controller_administracion/estado_datos_pregunta', {
        id_test,
        estado
        }, function() {
        window.location = '';
        });
    }
    function valor(id_pregunta, valor) {
        $.post('<?php echo base_url(); ?>Controller_administracion/estado_datos_pregunta_valor', {
        id_pregunta,
        valor
        }, function() {
        window.location = '';
        });
    }

    $("#guardar_nueva_categoria_curso").submit(function(event) {
        event.preventDefault();
        var formData = new FormData($("#guardar_nueva_categoria_curso")[0]);
        $("#cargar_datos").modal({
        backdrop: 'static',
        keyboard: false
        });
        $.ajax({
        url: '<?php echo base_url(); ?>Controller_administracion/guardar_nueva_categoria_curso',
        type: 'POST',
        data: formData,
        cache: true,
        processData: false,
        contentType: false,
        success: function() {
            alertify.success("<b>Datos enviados...</b>");
            swal("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS ", "success");
            setTimeout(function() {
            window.location = '';
            }, 500);
        }
        });
    });

    /*function editar_categoria_cursos(idtipo_curso_otros, tipo_conv_curso_nombre) {
        $("#modal_nuevo").modal('show')
        $("#b_titulo1").val(tipo_conv_curso_nombre)
        $("#idtipo_curso_otros").val(idtipo_curso_otros)
    }*/


    function exportar_para_grupo(id_curso){
        alert(id_curso);

    }

    /*function imprimir_pdf(id_curso, prof_est_tod){
        alert(id_curso + prof_est_tod);
    }*/

    </script>