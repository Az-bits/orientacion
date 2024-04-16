<form id="guardar_editar_usuario" method="post" accept-charset="utf-8">
  <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label for="input-1">CODIGO/DNI</label>
          <div class="input-group mb-3 autocompletar">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-pencil"></i></span>
            </div>
            <input type="text" value="<?php echo $obj->codigo ?>" class="form-control" placeholder="Ingresar..." disabled>
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
            <input type="text" name="nombre" id="nombre" value="<?php echo $obj->first_name ?>" class="form-control" placeholder="Ingresar..." required>
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
            <input type="text" name="apellido" id="apellido" value="<?php echo  $obj->last_name ?>" class="form-control" placeholder="Ingresar..." required>
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
            <input type="file" name="imagen" id="imagen" class="form-control nuevaFoto "  accept=".jpg, .jpeg, .png, .gif" >
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
                <option value="<?php echo $tp->id; ?>" <?php if($tp->id==$obj->id_rol) echo "selected"; ?>><?php echo $tp->name ?></option>
              <?php } ?>
            </select>
          </div>
      </div>
       <input type="hidden" name="imagen_a" value="<?php echo $obj->imagen ?>">
       <input type="hidden" name="id_grupo" value="<?php echo $obj->id_grupo ?>">
       <input type="hidden" name="id_user" value="<?php echo $obj->id_user ?>">
  </div>
  <div class="modal-footer">
    <button type="submit" id="boton" class="btn btn-primary"><i class="fa fa-check-square-o"></i> GUARDAR DATOS</button>
    <button type="button" class="btn btn-inverse-primary" data-dismiss="modal"><i class="fa fa-times"></i> CANCELAR</button>
  </div>
</form>
<script type="text/javascript" charset="utf-8" async defer>
    $("#guardar_editar_usuario").submit(function(event) {
    event.preventDefault();
    var formData=new FormData($("#guardar_editar_usuario")[0]);
    $("#cargar_datos").modal({backdrop:'static',keyboard:false});
    $.ajax({
        url:'<?php echo base_url(); ?>Controller_sistema/guardar_editar_usuario',
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
  });
</script>