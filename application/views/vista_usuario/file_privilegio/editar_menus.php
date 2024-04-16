<form method="post" id="guardar_editar_menu">
    <div class="panel-body">
      <div class="col-md-12">
        <div class="form-group1 ">
            <label>NOMBRE MENU</label>
              <input type="hidden" name="idtabla_menu" value="<?php echo $obj->idtabla_menu; ?>">
              <input type="text" name="nom_men1"  class="form-control" required value="<?php echo $obj->tabl_descripcion; ?>">
          </div>
      </div>
      <div class="col-md-12">
        <div class="form-group1 ">
            <label>NOMBRE FUNCION</label>
              <input type="text" name="nombre1"  class="form-control" required value="<?php echo $obj->tab_nombre; ?>">
          </div>
      </div>
      <div class="col-md-12">
        <div class="form-group1 ">
            <label>URL CONTROLLER</label>
              <input type="text" name="link1"  class="form-control" required value="<?php echo $obj->tab_link_funcion; ?>">
          </div>
      </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-green" data-dismiss="modal">CANCELAR</button>
        <button type="submit" class="btn btn-green">GUARDAR DATOS</button>
    </div>
</form>
<script>
  $("#guardar_editar_menu").submit(function(event) {
    event.preventDefault();
    $("#cargar_datos").modal({backdrop:'static',keyboard:false});
    $.ajax({
        url:'<?php echo base_url();?>Controller_sistema/guardar_editar_menu',
        type:'POST',
        data:$("form").serialize(),
            success:function(){
            alertify.success("Has GUARDAR ");
            alertify.alert("EXITOSAMENTE MODIFICADOS", function () { 
            window.location='';
          }); 
        }
    });
  });
</script>