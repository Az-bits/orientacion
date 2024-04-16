<div class="container-fluid">
<?php 
$user_id=$this->session->userdata('user_id');
$obj=$this->db->query("SELECT id,first_name,last_name,imagen FROM users WHERE id='$user_id' ")->row();
$grupo=$this->db->query("SELECT group_id FROM users_groups WHERE user_id='$user_id' ")->row();
$rol=$this->db->query("SELECT name FROM groups WHERE id='$grupo->group_id' ")->row();
 ?>
      <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">PERFIL PERFIL</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">INICIO</a></li>
            <li class="breadcrumb-item active" aria-current="page">PERFIL PERFIL</li>
         </ol>
     </div>
     <div class="col-sm-3">
       
     </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
          <div class="col-lg-4">
            <div class="profile-card-3">
              <div class="card">
                <div class="user-fullimage">
                  <?php if($obj->imagen){ ?>
                    <img src="<?php echo base_url();?>assets/img_perfil/<?php echo $obj->imagen; ?>" alt="user avatar" class="card-img-top">
                  <?php }else{ ?>
                    <img src="<?php echo base_url();?>assets/alert/no-image.png" alt="user avatar" class="card-img-top">
                  <?php } ?>
                 
                  <div class="details" style="background:#00000085;">
                    <h5 class="mb-1 text-white ml-3"><?php echo $obj->first_name; ?></h5>
                    <h6 class="text-white ml-3"><?php echo $obj->last_name; ?></h6>
                  </div>
                </div>
                <div class="card-body text-center">
                  <p>CONFIGURACION DEL PERFIL DE USUARIO PERSONAL</p>
                   
                  <hr>
                  <a href="<?php echo base_url(Hasher::make(1));?>" class="btn btn-danger shadow-danger btn-block btn-sm btn-round waves-effect waves-light m-1"><span class="fa fa-mail-reply-all"></span> SALIR</a>
                </div>
              </div>
            </div>
          </div>
        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">PERFIL</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="fa fa-key"></i> <span class="hidden-xs">PRIVILEGIOS MODULOS</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">PERFIL IMAGEN</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">User Profile</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="mt-2 mb-3"><span class="fa fa-pencil float-right"></span> TIPO DE USUARIO : <?php echo $rol->name ?></h5>
                            <h5 class="mt-2 mb-3"><span class="fa fa-pencil float-right"></span> NOMNRE : <?php echo $obj->first_name; ?></h5>
                            <h5 class="mt-2 mb-3"><span class="fa fa-pencil float-right"></span> APELLIDO : <?php echo $obj->last_name; ?></h5>
                        </div>
                        <div class="col-md-12">
                        <hr>
                        <hr>
                        <form id="guardar_seguridad" method="post">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">USUARIO</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" placeholder="Ingresar datos..." name="usu" id="usu" onkeyup="validar_usuario_existente(this.value)" required>
                                    <span id="vali_usuario"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">CONTRASEÑA</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="password" placeholder="Ingresar datos..." name="pas" id="pas" required>
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="submit" id="boton" class="btn btn-primary"><i class="fa fa-check-square-o"></i> GUARDAR DATOS</button>
                                <a href="" class="btn btn-inverse-primary" ><i class="fa fa-times"></i> CANCELAR</a>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <div class="alert-icon">
                          <i class="icon-info"></i>
                        </div>
                        <div class="alert-message">
                          <span><strong>NOTA !</strong> ACCESO A LOS MODULOS</span>
                        </div>
                    </div>
                    <table class="table table-hover table-striped">
                        <tbody>     
                          <?php foreach ($this->Modelo_configuracion->listar_privilegios($grupo->group_id) as $obj12) { ?>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold"> <|> </span> <?php  echo '<i aria-hidden="true" class="fa fa-check-square-o"></i> '.strtoupper($obj12->tabl_descripcion); ?>
                                </td>
                            </tr>
                          <?php } ?>                               
                        </tbody> 
                    </table>
                </div>
                <div class="tab-pane" id="edit">
                  <form method="post" id="guardar_img_perfil">
                  <input type="hidden" name="imagen_user" value="<?php echo $obj->imagen ?>">
                    <div class="form-group row">
                      <div class="col-lg-8">
                        <div class="form-group ">
                            <label>FOTO DE PERFIL</label>
                              <input type="file" class="form-control nuevaFoto1" name="imagen" accept=".jpg, .jpeg, .png, .gif" required>
                              <span id="error_img1"></span>
                          </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="input-1">VISUALIZAR</label>
                          <p>
                            <?php if($obj->imagen){ ?>
                            <img src="<?php echo base_url();?>assets/img_perfil/<?php echo $obj->imagen; ?>" width="110" height="90" class="visualizar1" alt="" >
                            <?php }else{ ?>
                              <img src="<?php echo base_url();?>assets/alert/no-image.png" alt="" width="110" height="90" class="visualizar1" >
                            <?php } ?>
                          </p>
                          
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <button type="submit" id="boton" class="btn btn-primary"><i class="fa fa-check-square-o"></i> GUARDAR DATOS</button>
                              <a href="" class="btn btn-inverse-primary" ><i class="fa fa-times"></i> CANCELAR</a>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>
		  
</div>


<script type="text/javascript" charset="utf-8" async defer>
  function validar_usuario_existente(usuario){
    $("#vali_usuario").html('<input type="hidden" id="validar_usu" value="1">');
    if (usuario.length>=3) {
      var expresion = /^[A-Za-z0-9_\/\&\*\()\#\@.-]+$/;
      if (!expresion.test(usuario)) {
        $("#vali_usuario").html('<b style="color: #ff0000;">No escriba caracteres especiales</b><input type="hidden" id="validar_usu" value="3">');
      }else{
        $.post('<?php echo base_url();?>Controller_sistema/validar_usuario_existente', {usuario}, function(dato) {
          if (dato==1) {
            $("#vali_usuario").html('<b style="color: #ff0000;">Usuario ya existe</b><input type="hidden" id="validar_usu" value="1">');
          }else{
            $("#vali_usuario").html('<b style="color: #008000;">Usuario no existe</b><input type="hidden" id="validar_usu" value="0">');
          }
        });
      }
    }else{
      $("#vali_usuario").html('<b style="color: #ff0000;">Usuario debil</b><input type="hidden" id="validar_usu" value="2">');    
    }    
  }
  $("#guardar_seguridad").submit(function(event) {
    event.preventDefault();
    var formData=new FormData($("#guardar_seguridad")[0]);
    var validar_usu=$("#validar_usu").val();
    
    if (validar_usu==1) {
      alertify.error("<b>Usuario ya existe...</b>"); 
      $("#vali_usuario").html('<b style="color: #ff0000;">Usuario ya existe</b><input type="hidden" id="validar_usu" value="1">');
    }else{
      if (validar_usu==2) {
        alertify.error("<b>Usuario debil...</b>"); 
        $("#vali_usuario").html('<b style="color: #ff0000;">Usuario debil</b><input type="hidden" id="validar_usu" value="2">');
      }else{
        if (validar_usu==3) {
          alertify.error("<b>No escriba caracteres especiales...</b>"); 
          $("#vali_usuario").html('<b style="color: #ff0000;">No escriba caracteres especiales</b><input type="hidden" id="validar_usu" value="3">');
        }else{
          $("#cargar_datos").modal({backdrop:'static',keyboard:false});
          $.ajax({
              url:'<?php echo base_url(); ?>Controller_sistema/guardar_seguridad',
              type:'POST',
              data:formData,
              cache:false,
              processData:false,
              contentType:false,
              success:function(dat){ 
                alertify.success("<b>Datos enviados...</b>"); 
                alertify.alert("<b style='color: #008000;'>"+dat+"</b> ", function () { 
                  window.location='';
                }); 
              } 
          });  

        }
      }  
    }      
    
  });

    $(".nuevaFoto1").change(function(){
    var imagen=this.files[0];
    if (imagen["type"]!="image/jpeg" && 
      imagen["type"]!="image/png" && 
      imagen["type"]!="image/gif" && 
      imagen["type"]!="image/jpg") {
      $(".nuevaFoto1").val('');
    $("#error_img1").html('<b style="color:#ff0000;">Formato invalido...</b>');
    $(".visualizar1").attr("src",'<?php echo base_url();?>assets/logos/imagen_no.jpg');
    }else{
      if(imagen['size']>5000000){
        $(".nuevaFoto1").val('');
        $("#error_img1").html('<b style="color:#ff0000;">Imagen exede de 5 mg...</b>');
      }else{
        $("#error_img1").html('');
        var datosImagen=new FileReader;
        datosImagen.readAsDataURL(imagen);
        $(datosImagen).on("load",function(event){
          var rutaImagen=event.target.result;
          $(".visualizar1").attr("src",rutaImagen);
        });
      }
    }
  });
    $("#guardar_img_perfil").submit(function(event) {
    event.preventDefault();
    var formData=new FormData($("#guardar_img_perfil")[0]);
    $("#cargar_datos").modal({backdrop:'static',keyboard:false});
    $.ajax({
        url:'<?php echo base_url(); ?>Controller_sistema/guardar_img_perfil',
        type:'POST',
        data:formData,
        cache:false,
        processData:false,
        contentType:false,
        success:function(){ 
            alertify.success("<b>Datos enviados...</b>"); 
            swal("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS ","success");
            setTimeout(function(){
               window.location='';
          },1000);
        } 
    });
  });
</script>