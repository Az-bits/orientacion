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
            <div class="card-header "><h1 class="fer_text" align="center"><i class="fa fa-users"></i>ADMINISTRACION USUARIOS</h1></div>
            <div class="card-body">
            <button type="button" class="btn btn-primary shadow-primary btn-round btn-lg btn-outline-primary btn-round waves-effect waves-light m-1" data-toggle="modal" data-target="#primarymodal"><span class="fa fa-plus"></span> NUEVO USUARIO</button>

              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead class="table-primary shadow-primary">
                    <tr>
                        <th>#</th>
                        <th>IMAGEN</th>
                        <th>USUARIO</th>
                        <th>TIPO USUARIO</th>
                        <th>ESTADO</th>
                        <th>ACCION</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $con=1; foreach ($this->Modelo_configuracion->listar_usuarios() as $kevalue) { ?>
                    <tr>
                        <td><?php echo $con++; ?></td>
                        <td>
                          <?php if($kevalue->imagen){ ?>
                            <img width="40" src="<?php echo base_url();?>assets/img_perfil/<?php echo $kevalue->imagen; ?>" alt="">
                          <?php }else{ ?>
                            <img width="40" src="<?php echo base_url();?>assets/alert/no-image.png" alt="">
                          <?php } ?>
                        </td>
                        <td><?php echo $kevalue->first_name.' '.$kevalue->last_name; ?></td>
                        <td><?php echo $kevalue->name; ?></td>
                        <td>
                          <?php if ($kevalue->active=='1') { ?>
                            <span class="badge badge-success shadow-success m-1">activo</span>
                          <?php }else{ ?>
                            <span class="badge badge-danger shadow-success m-1">inactivo</span>                    
                          <?php } ?>
                        </td>
                        <td>
                            <div class="btn-group m-1" role="group">
                              <button type="button" class="btn btn-outline-primary waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ACCION
                              </button>
                              <div class="dropdown-menu" style="">
                                <a href="javaScript:void();" onclick="editar_usuario('<?php echo $kevalue->id_user; ?>')" class="dropdown-item"><span class="fa fa-pencil"></span> EDITAR</a>
                                <a href="javaScript:void();" onclick="reset_estado('<?php echo $kevalue->id_user; ?>')" class="dropdown-item"><span class="fa fa-key"></span> RESET</a>
                                <a href="javaScript:void();" onclick="cambiar_estado('<?php echo $kevalue->id_user; ?>','<?php echo $kevalue->active; ?>')" class="dropdown-item"><span class="fa fa-power-off"></span> ESTADO</a>
                                <div class="dropdown-divider"></div>
                              </div>
                            </div>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
                
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

    </div>
    


<div class="modal fade" id="primarymodal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-primary animated bounceIn">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white fer_text"><i class="fa fa-star"></i> NUEVO USUARIO</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="guardar_nuevo_usuario" method="post" accept-charset="utf-8">
              <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="input-1">CODIGO/DNI</label>
                      <div class="input-group mb-3 autocompletar">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                        </div>
                        <input type="text" name="codigo" id="tipo-mascota" class="form-control" placeholder="Ingresar..." required>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="input-1">NOMBRE</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                        </div>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresar..." required>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="input-1">APELLIDOS</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                        </div>
                        <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingresar..." required>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-8">
                    <div class="form-group">
                      <label for="input-1">IMAGEN PERFIL</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                        </div>
                        <input type="file" name="imagen" id="imagen" class="form-control nuevaFoto "  accept=".jpg, .jpeg, .png, .gif" required>
                          <span id="error_img"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="input-1">VISUALIZAR</label>
                      <p><img width="70" height="60" class="visualizar" src="<?php echo base_url();?>assets/alert/no-image.png"></p>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group ">
                        <label class="fg-cobalt">.:::TIPO DE USUARIOS:::.</label>
                        <select name="id_rol" id="id_rol" class="form-control" required>
                        <option></option>}
                        option
                          <?php foreach ($this->db->get("groups")->result() as $tp) { ?>
                            <option value="<?php echo $tp->id; ?>"><?php echo $tp->name ?></option>
                          <?php } ?>
                        </select>
                      </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="input-1">USUARIO</label>
                      <input type="text" name="usu" id="usu" class="form-control" onkeyup="validar_usuario_existente(this.value)" placeholder="Ingresar..." required>
                        <span id="vali_usuario"></span>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="input-1">PASSWORD</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                        </div>
                        <input type="password" name="pas" id="pas" class="form-control" placeholder="Ingresar..." required>
                      </div>
                    </div>
                  </div>

                   <div class="col-lg-12">
                    <div id="datos_tablas">
                      
                    </div>
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


<div class="modal fade" id="modal_reset">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-primary animated bounceIn">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white fer_text"><i class="fa fa-star"></i> RESET USUARIO/PASSWORD</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body"  id="ver_reset">
           
          </div>
        </div>
    </div>
</div>


<div class="modal fade" id="editarmodal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-primary animated bounceIn">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white fer_text"><i class="fa fa-star"></i> MODIFICAR DATOS DE USUARIO</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="ver_editar" >
            
          </div>
        </div>
    </div>
</div>
<script  type="text/javascript" charset="utf-8" async defer>
  $(".nuevaFoto").change(function(){
    var imagen=this.files[0];
    if (imagen["type"]!="image/jpeg" && 
      imagen["type"]!="image/png" && 
      imagen["type"]!="image/gif" && 
      imagen["type"]!="image/jpg") {
      $(".nuevaFoto").val('');
    $("#error_img").html('<b style="color:#ff0000;">Formato invalido...</b>');
    $(".visualizar").attr("src",'<?php echo base_url();?>assets/logos/imagen_no.jpg');
    }else{
      if(imagen['size']>5000000){
        $(".nuevaFoto").val('');
        $("#error_img").html('<b style="color:#ff0000;">Imagen exede de 5 mg...</b>');
      }else{
        $("#error_img").html('');
        var datosImagen=new FileReader;
        datosImagen.readAsDataURL(imagen);
        $(datosImagen).on("load",function(event){
          var rutaImagen=event.target.result;
          $(".visualizar").attr("src",rutaImagen);
        });
      }
    }
  });


  function autocompletar(){
      const inputMascota = document.querySelector('#tipo-mascota');    
      let indexFocus = -1;

      inputMascota.addEventListener('input', function(){
          const tipoMascota = this.value;
          
          if(!tipoMascota) return false;
          cerrarLista();

          //crear la lista de sugerencias
          const divList = document.createElement('div');
          divList.setAttribute('id', this.id + '-lista-autocompletar');
          divList.setAttribute('class', 'lista-autocompletar-items');
          this.parentNode.appendChild(divList);

          // conexión a BD
          // httpRequest('controller.php?tipo-mascota=' + tipoMascota, function(){
              // alert(tipoMascota)
          httpRequest('<?php echo base_url(); ?>Controller_sistema/mostrar_autocompletar/' + tipoMascota, function(){
              // console.log(datos)
              buscar_datos_existente(tipoMascota)


              const arreglo = JSON.parse(this.responseText);

              if(arreglo.length == 0) return false;
              arreglo.forEach(item => {
                  if(item.substr(0, tipoMascota.length) == tipoMascota){
                      const elementoLista = document.createElement('div');
                      elementoLista.innerHTML = `<strong>${item.substr(0, tipoMascota.length)}</strong>${item.substr(tipoMascota.length)}`;
                      elementoLista.addEventListener('click', function(){
                          inputMascota.value = this.innerText;
                          buscar_datos_existente(this.innerText);
                          cerrarLista();
                          return false;
                      });
                      divList.appendChild(elementoLista);
                  }    
              });
          });
      });

      inputMascota.addEventListener('keydown', function(e){
          const divList = document.querySelector('#' + this.id + '-lista-autocompletar');
          let items;

          if(divList){
              items = divList.querySelectorAll('div');

              switch(e.keyCode){
                  case 40: //tecla de abajo
                      indexFocus++;
                      if(indexFocus > items.length-1) indexFocus = items.length - 1; 
                  break;

                  case 38: //tecla de arriba
                      indexFocus--;
                      if(indexFocus < 0) indexFocus = 0;
                  break;

                  case 13: // presionas enter
                      e.preventDefault();
                      items[indexFocus].click();
                      indexFocus = -1;
                  break;

                  default:
                  break;
              }

              seleccionar(items, indexFocus);
              return false;
          }
      });

      document.addEventListener('click', function(){
          cerrarLista();
      });
  }

  function seleccionar(items, indexFocus){
      if(!items || indexFocus == -1) return false;
      items.forEach(x => {x.classList.remove('autocompletar-active')});
      items[indexFocus].classList.add('autocompletar-active');
  }

  function cerrarLista(){
      const items = document.querySelectorAll('.lista-autocompletar-items');
      items.forEach(item => {
          item.parentNode.removeChild(item);
      });
      indexFocus = -1;
  }

  function httpRequest(url, callback){
      const http = new XMLHttpRequest();
      http.open('GET', url);
      http.send();

      http.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
              callback.apply(http);
          }
      }
  }

  autocompletar();

  function buscar_datos_existente(codigo){ 
      $.post('<?php echo base_url(); ?>Controller_sistema/buscar_datos_existente', {codigo}, function(data) { 
          var valores = eval(data);
          if (valores[0]==0) {

              $('#nombre').val('');
              $("#nombre").removeAttr("disabled");

              $('#apellido').val('');
              $("#apellido").removeAttr("disabled");

              $('#imagen').val('');
              $("#imagen").removeAttr("disabled");

              $('#id_rol').removeAttr("disabled");
              $("#id_rol > option");

              $('#usu').val('');
              $("#usu").removeAttr("disabled");

              $('#pas').val('');
              $("#pas").removeAttr("disabled");
              document.getElementById('boton').disabled=false;
              $("#datos_tablas").html('<input type="hidden" id="error" value="0"> ');
              
          }else{

              $('#nombre').val(valores[1]);
              $("#nombre").attr('disabled', 'disabled');

              $('#apellido').val(valores[2]);
              $("#apellido").attr('disabled', 'disabled');

              $('#imagen').val('');
              $("#imagen").attr('disabled', 'disabled');

              $("#id_rol > option").attr("selected",true);
              $("#id_rol").attr('disabled', 'disabled');

              $('#usu').val(valores[4]);
              $("#usu").attr('disabled', 'disabled');

              $('#pas').val(valores[""]);
              $("#pas").attr('disabled', 'disabled');

              document.getElementById('boton').disabled=true;
              $("#datos_tablas").html('<input type="hidden" id="error" value="1"><div class="alert alert-outline-danger alert-dismissible" role="alert"><div class="alert-icon"> <i class="icon-close"></i> </div><div class="alert-message"> <span><strong>NOTA!</strong> USUARIO YA SE ENCUENTRA REGISTRADO EN EL SISTEMA </span></div> </div> ');
          }
      });
  }  
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
  $("#guardar_nuevo_usuario").submit(function(event) {
    event.preventDefault();
    var formData=new FormData($("#guardar_nuevo_usuario")[0]);
    var error_usu_active=$("#error").val();
    var validar_usu=$("#validar_usu").val();
    if (error_usu_active!=1) {
      if (validar_usu==1) {
          $("#vali_usuario").html('<b style="color: #ff0000;">Usuario ya existe</b><input type="hidden" id="validar_usu" value="1">');
      }else{
        if (validar_usu==2) {
          $("#vali_usuario").html('<b style="color: #ff0000;">Usuario debil</b><input type="hidden" id="validar_usu" value="2">');
        }else{
          if (validar_usu==3) {
            $("#vali_usuario").html('<b style="color: #ff0000;">No escriba caracteres especiales</b><input type="hidden" id="validar_usu" value="3">');
          }else{
            $("#cargar_datos").modal({backdrop:'static',keyboard:false});
            $.ajax({
                url:'<?php echo base_url(); ?>Controller_sistema/guardar_nuevo_usuario',
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
    }else{
      alertify.error("Usuario ya se encuentra activo...");
    }
  });
  function cambiar_estado(id_user,estado){
    $.post('<?php echo base_url(); ?>Controller_sistema/cambiar_estado', {id_user,estado}, function(d) {
      alertify.success("<b>Datos enviados...</b>"); 
      alertify.alert("<b style='color: #008000;'>EXITOSAMENTE MODIFICADO EL ESTADO</b> ", function () { 
        window.location='';
      }); 
    });
  }
  function reset_estado(id_user){
    $("#modal_reset").modal('show');
    $.post('<?php echo base_url(); ?>Controller_sistema/reset_estado', {id_user}, function(data) {
      $("#ver_reset").html(data);
    });
  }
  function editar_usuario(id_user){
    $("#editarmodal").modal('show');
    $.post('<?php echo base_url(); ?>Controller_sistema/editar_usuario', {id_user}, function(data) {
      $("#ver_editar").html(data);
    });
  }
</script>