    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">MODULO USUARIO</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">MODULO USUARIO</a></li>
            <li class="breadcrumb-item active" aria-current="page">ADMIN USUARIOS</li>
         </ol>
	   </div>
     </div>
    <!-- End Breadcrumb-->

      










      <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body"> 
                <ul class="nav nav-tabs nav-tabs-info nav-justified">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tabe-13"><i class="icon-home"></i> <span class="hidden-xs">PERMISOS</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabe-14"><i class="icon-user"></i> <span class="hidden-xs">DEVELOPER</span></a>
                  </li>
                  
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="tabe-13" class="container tab-pane active">

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="card">
                          <div class="card-header "><h4 class="fer_text" align="center"><i class="fa fa-users"></i>ADMINISTRACION DE PRIVILEGIOS</h4></div>
                          <div class="card-body">
                          <button type="button" class="btn shadow-primary btn-round btn-outline-primary btn-round waves-effect waves-light m-1" data-toggle="modal" data-target="#primarymodal"><span class="fa fa-plus"></span> ASIGNAR PERMISO</button>

                            <div class="table-responsive" id="mostrar_lista_privilegios">
                            
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  
                  <div id="tabe-14" class="container tab-pane fade">
                  <div class="table-responsive">
                    <table class=" table-striped">
                        <thead>
                          <tr  class="headings">
                            <th></th>
                            <th>
                              <button class="btn btn-primary btn-green" data-toggle="modal" data-target="#modaldeveloepr"><i class="fa fa-plus"></i> NUEVO MODULO</button>
                            </th>
                            <th>NOMBRE MENU</th>
                            <th>NOMBRE FUNCION</th>
                            <th>URL CONTROLLER</th>
                            <th>ESTADO</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $c=1; foreach ($this->db->query("SELECT * FROM tabla_menu  ")->result() as $objj) {  ?>
                          <tr>
                            <td><span class="badge badge-wisteria"><?php echo $c++; ?></span></td>
                            <th scope="row">
                              <button class="btn btn-primary btn-round btn-sm" onclick="editar_menus('<?php echo $objj->idtabla_menu; ?>')"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-primary btn-round btn-sm" onclick="eliminar_menus('<?php echo $objj->idtabla_menu; ?>')"><i class="fa fa-trash"></i></button>
                              <button class="btn btn-primary btn-round btn-sm" onclick="estado_m_menus('<?php echo $objj->idtabla_menu; ?>','<?php echo $objj->tabl_estado ?>')"><i class="fa fa-power-off"></i></button>
                            </th>
                            <td><?php echo strtoupper('<u>'.$objj->tabl_descripcion.'</u> ') ?></td>
                            <td><?php echo $objj->tab_nombre ?></td>
                            <td><?php echo $objj->tab_link_funcion ?></td>
                            <td>
                              <?php if ($objj->tabl_estado=='activo') { ?>
                                <span class="badge badge-success shadow-success m-1">activo</span>
                              <?php }else{ ?>
                                <span class="badge badge-danger shadow-success m-1">inactivo</span>                    
                              <?php } ?>
                            </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                    </table><hr>
                  </div>
                  </div>
                           
                </div>
              </div>
           </div>

        </div>

      </div><!--End Row-->






<div class="modal fade" id="primarymodal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-primary animated bounceIn">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white"><i class="fa fa-star"></i> ASIGNAR PERMISOS</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" id="guardar_privilegios">
              <div class="modal-body">
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="form-group1 ">
                        <label>TIPO DE USUARIO</label>
                          <select name="idtipo_usuario" id="idtipo_usuario" class="form-control" onchange="verificar_menus(this.value)" required>
                            <option></option>
                            <?php foreach ($this->db->get("groups")->result() as $t) {  ?>
                              <option value="<?php echo $t->id ?>"><?php echo $t->name ?></option>
                            <?php } ?>
                          </select>
                      </div>
                  </div>
                  <div class="x_content" >
                  <h5>LISTA DE MODULOS</h5>
                    <div class="" id="listar_menus_sis">
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn shadow-primary btn-round btn-lg btn-outline-primary btn-round waves-effect waves-light m-1">GUARDAR DATOS</button>
                <button type="button" class="btn shadow-primary btn-round btn-lg btn-outline-primary btn-round waves-effect waves-light m-1" data-dismiss="modal">CANCELAR</button>
              </div>
            </form>
          </div>
         
        </div>
    </div>
</div>

<div class="modal fade" id="modaldeveloepr">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-primary animated bounceIn">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white"><i class="fa fa-star"></i> ASIGNAR PERMISOS</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" id="guardar_modulos">
            <div class="modal-body">
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="form-group1 ">
                        <label>NOMBRE MENU</label>
                          <input type="text" name="nom_men" id="nom_men" class="form-control" required>
                      </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group1 ">
                        <label>NOMBRE FUNCION</label>
                          <input type="text" name="nombre" id="nombre" class="form-control" required>
                      </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group1 ">
                        <label>URL CONTROLLER</label>
                          <input type="text" name="link" id="link" class="form-control" required>
                      </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn shadow-primary btn-round btn-lg btn-outline-primary btn-round waves-effect">GUARDAR DATOS</button>
                <button type="button" class="btn shadow-primary btn-round btn-lg btn-outline-primary btn-round waves-effect" data-dismiss="modal">CANCELAR</button>
            </div>
        </form>
          </div>
         
        </div>
    </div>
</div>
<div class="modal fade" id="editar_modulos_menu">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-primary animated bounceIn">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white"><i class="fa fa-star"></i> ASIGNAR PERMISOS</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="ver_edi">
            
          </div>
         
        </div>
    </div>
</div>

<script>
  $(document).on("ready",listar_privilegios());
  function listar_privilegios() {
    $.post('<?php echo base_url();?>Controller_sistema/listar_privilegios', function(dato) {
      $("#mostrar_lista_privilegios").html(dato);
    });
  }
  function verificar_menus(idtipo_usuario){
      $("#listar_menus_sis").html('');
      $.post('<?php echo base_url();?>Controller_sistema/verificar_menus', {idtipo_usuario}, function(dato) {
        $("#listar_menus_sis").html(dato);
      });
  }
  $("#guardar_privilegios").submit(function(event) {
      event.preventDefault();
      $("#cargar_datos").modal({backdrop:'static',keyboard:false});
      $.ajax({
          url:'<?php echo base_url();?>Controller_sistema/guardar_privilegios',
          type:'POST',
          data:$("form").serialize(),
          success:function(dato){ 
            var valores = eval(dato);
            if (valores[0]===0) {
              alertify.error("Debes seleccionar modulos...");
            }else{
              alertify.success("Has GUARDAR ");
              alertify.alert("EXITOSAMENTE GUARDADO", function () { 
                window.location='';
              }); 
            }
              
          }
      });
  });
  function cambiar_eliminar_privilegios(idprivilegios){
    alertify.confirm("<p>NOTA<br>Esta seguiro que desea eliminar ???<br><b>ENTER</b> y <b>ESC</b> corresponden a <b>Aceptar</b> o <b>Cancelar</b></p>", function (e) {
      if (e) {
        alertify.success("Has pulsado ok... ");
        $.post('<?php echo base_url();?>Controller_sistema/cambiar_eliminar_privilegios',{idprivilegios:idprivilegios}, function() {
          window.location='';
        });
      } else { alertify.error("Has pulsado cancel");
      }
    }); 
    return false
  }
  function cambiar_estado_privilegios(idprivilegios,estado){ //alert(idprivilegios+'> '+estado)
      if (estado==1) {
        alertify.error("Desactivado...");
      }else{
        alertify.success("Activado... ");
      }
    $.post('<?php echo base_url();?>Controller_sistema/cambiar_estado_privilegios', {idprivilegios:idprivilegios,estado:estado}, function(dato) {
      window.location='';
    });
  }












    $("#guardar_modulos").submit(function(event) {
        event.preventDefault();
        $("#cargar_datos").modal({backdrop:'static',keyboard:false});
        $.ajax({
            url:'<?php echo base_url();?>Controller_sistema/guardar_modulos',
            type:'POST',
            data:$("form").serialize(),
                success:function(){
                alertify.success("Has GUARDAR ");
                alertify.alert("EXITOSAMENTE GUARDADO", function () { 
                window.location='';
              }); 
            }
        });
    });
    function estado_m_menus(idtabla_menu,tabl_estado){
      $.post('<?php echo base_url();?>Controller_sistema/estado_m_menus',{idtabla_menu,tabl_estado}, function() {
        window.location='';
      });
    }
    function eliminar_menus(idtabla_menu){
        alertify.confirm("<p>NOTA<br>Esta seguiro que desea eliminar ???<br><b>ENTER</b> y <b>ESC</b> corresponden a <b>Aceptar</b> o <b>Cancelar</b></p>", function (e) {
          if (e) {
            $.post('<?php echo base_url();?>Controller_sistema/eliminar_menus',{idtabla_menu}, function() {
              window.location='';
            });
          } else { alertify.error("Has pulsado cancel");
          }
        }); 
        return false
    }
    function editar_menus(idtabla_menu){
        $("#editar_modulos_menu").modal('show');
        $.post('<?php echo base_url();?>Controller_sistema/editar_menus',{idtabla_menu}, function(dato) {
          $("#ver_edi").html(dato);
        });
    }
</script>