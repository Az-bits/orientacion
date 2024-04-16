<div class="container-fluid">
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
    <h4 class="page-title">ADMINISTRACION</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">ADMINISTRACION</a></li>
        <li class="breadcrumb-item active" aria-current="page">TIPO DE TEST</li>
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

        <h3 class="fer_text" align="center">CATEGORIA</h3>
        <div class="row">
            <div class="col-lg-3">
              <button type="button" class="btn btn-outline-primary btn-square waves-effect waves-light m-1" data-toggle="modal" data-target="#modal_nuevo">Nuevo categoria</button>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered table-sm">
                <thead class="table-primary shadow-primary">
                    <tr>
                        <th>#</th>
                        <th>TIPO TEST</th>
                        <th>TIEMPO TEST</th>
                        <th>ESTADO</th>
                        <th>ACCION</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $con=1; foreach ($this->db->get('dat_tipo')->result() as $value) {
                  if ($value->estado!='ELIMINADO') {   ?>
                  <tr>
                    <td><?php echo $con++; ?></td>
                    <td><?php echo $value->test; ?></td>
                    <td><?php echo $value->tiempo; ?></td>
                    <td>
                      <?php if($value->estado=='ACTIVO'){ $estado=1; ?>
                          <input type="checkbox" checked class="js-switch" onchange="estado_datos('<?php echo $value->id_dat_tipo; ?>','<?php echo $estado; ?>')" data-color="#15ca20"/>
                      <?php }else{ $estado=0; ?>
                          <input type="checkbox" class="js-switch" onchange="estado_datos('<?php echo $value->id_dat_tipo; ?>','<?php echo $estado; ?>')" data-color="#15ca20"/>
                      <?php } ?>
                    </td>
                    <td>
                        
                        <?php if($value->estado=='ACTIVO'){?>
                          <button  type="button" class="btn btn-gradient-scooter waves-effect waves-light m-1 btn-sm" 
                                      onclick="editar_categoria_test('<?php echo $value->id_dat_tipo; ?>','<?php echo $value->test; ?>',
                                      '0','<?php echo $value->tiempo; ?>','<?php echo $value->cantidad_muestra; ?>')"><span class="fa fa-pencil"></span></button>
                          <!--<a type="button" href="<?php //echo base_url(Hasher::make(92,$value->id_dat_tipo));  ?>" class="btn btn-gradient-scooter waves-effect waves-light m-1"><i class="fa fa-plus" aria-hidden="true"></i>
                          </a>-->

                          <a type="button" href="<?php echo base_url(Hasher::make(930,$value->id_dat_tipo));?>" class="btn btn-outline-info btn-sm waves-effect waves-light m-1" ><i class="fa fa-list" aria-hidden="true"></i>
                          
                          <?php //echo //$value->test; ?>
                          </a>
                          <?php } ?>
                    </td>
                  </tr>
                  <?php } } ?>
                </tbody>
                  
              </table>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>

</div>









<div class="modal fade" id="modal_nuevo">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-primary animated bounceIn">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white fer_text"><i class="fa fa-star"></i> DATOS DE TEST DAT</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
            <form id="guardar_nueva_categoria_test" method="post" accept-charset="utf-8">
              <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="input-1">TITULO TEST</label>
                      <div class="input-group mb-3 autocompletar">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                        </div>
                        
                        <input type="text" name="b_titulo1" id="b_titulo1" class="form-control" placeholder="Ingresar..."  onkeyup='mostrar(this.value)' required>
                        <input type="hidden" name="id_dat_tipo" id="id_dat_tipo" value="0">
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group ">
                      <label>INSTRUCCIONES</label>
                      <textarea class="form-control summernoteEditor " name="instrucciones" id="instrucciones" placeholder="Ingresar datos..." required></textarea>

                      </div>
                  </div>      
                  <!-- hora evento -->
                  <div class="col-sm-6">
                        <label>TIEMPO DEL TEST</label>
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                          </div>
                          <input type="time" name="tiempo" id="tiempo" class="form-control" min="00:05:00" max="03:00:00" required>
                      </div>
                  </div>  
                  <div class="col-sm-6">
                      <label>CANTIDAD MUESTRA</label>
                      <div class="input-group mb-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                      </div>
                      <input type="number" name="cantidad_muestra" id="cantidad_muestra" min="1" max="30" class="form-control" placeholder="Ingresar datos..." onkeypress="return soloNumeros(event)"  required>
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
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/plugins/summernote/dist/summernote-bs4.css"/>
<script src="<?php echo base_url();?>assets/admin/assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
<script>
$('.summernoteEditor').summernote({
        height: 400,
        tabsize: 2
    });
</script>
<script>
  
//para elimnar la ultima letra






function estado_datos(id_dat_tipo,estado){
  $.post('<?php echo base_url(); ?>Controller_administracion/estado_datos_categoria_test', {id_dat_tipo,estado}, function() {
    window.location='';
  });
}

$("#guardar_nueva_categoria_test").submit(function(event) {
  event.preventDefault();
  var formData=new FormData($("#guardar_nueva_categoria_test")[0]);
  $("#cargar_datos").modal({backdrop:'static',keyboard:false});
  $.ajax({
      url:'<?php echo base_url(); ?>Controller_administracion/guardar_nueva_categoria_test',
      type:'POST',
      data:formData,
      cache:true,
      processData:false,
      contentType:false,
      success:function(){ 
          alertify.success("<b>Datos enviados...</b>"); 
          swal("NOTA!", "EXITOSAMENTE GUARDADO LOS DATOS ","success");
          setTimeout(function(){
            window.location='';
        },500);
      } 
  });
});

function editar_categoria_test(id_dat_tipo,test,instrucciones,tiempo,cantidad_muestra){
  $("#modal_nuevo").modal('show')
  $("#b_titulo1").val(test)
  $("#instrucciones").val(instrucciones)
  $("#tiempo").val(tiempo)
  $("#cantidad_muestra").val(cantidad_muestra)
  $("#id_dat_tipo").val(id_dat_tipo)
}

function mostrar(valor){
  var ingresado = valor;
    $.post('<?php echo base_url(); ?>Controller_administracion/buscar_exixte_dato', {
      ingresado
    },function(datoss) {
      //console.log(datoss);
      var valores = eval(datoss);

      //console.log(valores); 
      if (valores[0] === 'existe') {
          //$('#b_titulo1').val('');
          document.getElementById('boton').disabled = true;
          swal("NOTA!", "YA HAY UNA CATEGORIA CON EL MISMO NOMBRE", "error");
        }else {
          if(valores[0]=== 'puede'){
            document.getElementById('boton').disabled = false;
          }
        }
    }
  )};
  
</script>