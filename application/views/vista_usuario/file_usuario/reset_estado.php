 <form id="guardar_reset_usuario" method="post" accept-charset="utf-8">
    <div class="row">
       
        <div class="col-lg-12">
          <div class="form-group">
            <label for="input-1">NOMBRE</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-pencil"></i></span>
              </div>
              <input type="text" class="form-control" value="<?php echo $obj->first_name.' '.$obj->last_name ?>" placeholder="Ingresar..." disabled="">
            </div>
          </div>
        </div>
      

        
        <div class="col-md-12">
          <div class="form-group ">
              <label class="fg-cobalt">.:::TIPO DE USUARIOS:::.</label>
              <select  class="form-control" disabled="">
              <option></option>}
              option
                <?php foreach ($this->db->get("groups")->result() as $tp) { ?>
                  <option value="<?php echo $tp->id; ?>" <?php if($tp->id==$obj->id_rol) echo "selected"; ?>><?php echo $tp->name ?></option>
                <?php } ?>
              </select>
            </div>
        </div>

        <div class="col-lg-6">
          <div class="form-group">
            <label for="input-1">USUARIO</label>
            <input type="text" class="form-control" value="<?php echo $obj->username; ?>" placeholder="Ingresar..." disabled>
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
              <input type="text" value="<?php echo $obj->codigo ?>" class="form-control" placeholder="Ingresar..." disabled>
            </div>
          </div>
        </div>

        <input type="hidden" name="id_user" value="<?php echo $obj->id_user ?>">
        <input type="hidden" name="usuario" value="<?php echo $obj->username; ?>">
        <input type="hidden" name="pass" value="<?php echo $obj->codigo ?>">
        


    </div>
    <div class="modal-footer">
      <button type="submit" id="boton" class="btn btn-primary"><i class="fa fa-check-square-o"></i> GUARDAR DATOS</button>
      <button type="button" class="btn btn-inverse-primary" data-dismiss="modal"><i class="fa fa-times"></i> CANCELAR</button>
    </div>
  </form>
  <script type="text/javascript" charset="utf-8" async defer>
    $("#guardar_reset_usuario").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url:'<?php echo base_url();?>Controller_sistema/guardar_reset_usuario',
            type:'POST',
            data:$("form").serialize(),
            success:function(){
                alertify.success("<b>Datos enviados...</b>"); 
                alertify.alert("<b style='color: #008000;'>EXITOSAMENTE MODIFICADO</b> ", function () { 
                  window.location='';
                }); 
            }
        });
    });
  </script>