<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="Hugo Vladimir Ajno HUchani">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulario Registro</title>
  <link href="<?php echo base_url(); ?>assets_/libs/img/UPEA.png" rel="icon">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/form/css/style.css">
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

</head>

<body>
  <div class=container-fluid>
    <form class="form-register" method="POST" action="<?php echo base_url(Hasher::make(1513)) ?>">
      <div style="text-align: center">
        <h4>PARA REALIZAR EL TEST INTERES INTRODUZCA LOS DATOS CORRESPONDIENTES</h4>
      </div>


      <input type="hidden" id="idest" name="idest">
      <input type="text" name="txtCI" id="txtCI" class="controls" maxlength="12" value="" placeholder="Cedula de Identidad..." onkeyup="buscar_ci(this.value)" required>
      <input type="text" name="txtNombres" id="txtNombres" class="controls" value="" placeholder="Nombres..." autocomplete="off" required>
      <input type="text" name="txtApellidos" id="txtApellidos" class="controls" value="" placeholder="Apellidos..." autocomplete="off" required>
      <input type="text" name="txtCelular" id="txtCelular" class="controls" maxlength="12" value="" placeholder="Celular..." autocomplete="off" required>
      <input type="number" name="txtEdad" id="txtEdad" class="controls" value="" placeholder="Edad..." autocomplete="off" required>
      <select name="txtSexo" id="txtSexo" class="controls" required>
        <option value="">Sexo...</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
      </select>
      <label>Datos de Unidad Educativa</label>
      <br>

      <select id="txtDepartamento" name="txtDepartamento" class="controls">
        <option>Departamento...</option>

        <?php foreach ($this->db->query("SELECT * FROM departamento WHERE estado_departamento = 'ACTIVO'")->result() as $value) {

          if ($value->id_departamento != 0) { ?>
            <option value="<?php echo $value->id_departamento ?>"><?php echo $value->nombre_departamento ?></option>
        <?php }
        } ?>
      </select>
      <select id="txtProvincia" name="txtProvincia" class="controls">
        <option value="">Provincia</option>
      </select>
      <select id="txtMunicipio" name="txtMunicipio" class="controls">
        <option value="">Municipio</option>
      </select>
      <select id="txtColegio" name="txtColegio" class="controls" required>
        <option value="">Colegio</option>
      </select>








      <input class="botons" type="submit" value="REALIZAR TEST">

    </form>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#txtDepartamento").change(function() {
          $("#txtDepartamento option:selected").each(function() {
            id_departamento = $('#txtDepartamento').val();
            $.post('<?php echo base_url(); ?>Controller_estudiante/departamento', {
              id_departamento: id_departamento
            }, function(data) {
              $("#txtProvincia").html(data);
            });
          });
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#txtProvincia").change(function() {
          $("#txtProvincia option:selected").each(function() {
            id_provincia = $('#txtProvincia').val();
            $.post('<?php echo base_url(); ?>Controller_estudiante/provincia', {
              id_provincia: id_provincia
            }, function(data) {
              $("#txtMunicipio").html(data);
            });
          });
        });
      });
    </script>
        <script type="text/javascript">
      $(document).ready(function() {
        $("#txtMunicipio").change(function() {
          $("#txtMunicipio option:selected").each(function() {
            id_municipio = $('#txtMunicipio').val();
            $.post('<?php echo base_url(); ?>Controller_estudiante/municipio', {
              id_municipio: id_municipio
            }, function(data) {
              $("#txtColegio").html(data);
            });
          });
        });
      });
    </script>

    <div class="form-register">
      <a href="<?php echo base_url(Hasher::make(270)) ?>"><button class="botons" type="submit" style="background-color: #1abc9c; margin: 0px">VOLVER A INICIO</button></a>
      <!-- <a href="<?php echo base_url(Hasher::make(27)) ?>"><button class="botons" type="submit" style="background-color: #1abc9c; margin: 0px">Registrar Unidad Educativa</button></a> -->
    </div>


  </div>


















</body>

</html>
<script src="js/jquery-1.10.2.min.js"></script>

<script src="https://cceorientacionvocacional.upea.bo/assets/admin/assets/js/global-plugins.js"></script>


<!-- para select dinamico -->

<script>
  function buscar_ci(ci) {
    if (ci.length > 3) {
      $.post('<?php echo base_url(); ?>Controller_estudiante/C_buscar_estudiante', {
        ci
      }, function(data) {
        var datos = JSON.parse(data);
        if (datos) {
          $("#idest").val(datos.idestudiante);
          $("#txtNombres").val(datos.nombre_est).attr('readonly');
          $("#txtApellidos").val(datos.apellido_est).attr('readonly');
          $("#txtCelular").val(datos.celular_est).attr('readonly');
          $("#txtEdad").val(datos.edad_est).attr('readonly');
          $("#txtSexo").val(datos.sexo_est).attr('readonly');
        } else {
          $("#txtNombres").val('').removeAttr('readonly');
          $("#txtApellidos").val('').removeAttr('readonly');
          $("#txtCelular").val('').removeAttr('readonly');
          $("#txtEdad").val('').removeAttr('readonly');
          $("#txtSexo").val('').removeAttr('readonly');
        }

      });
    }
  }
</script>
<script type="text/javascript">
  //<![CDATA[


  function checkDevTools() {
    // Iniciar cronómetro
    var time_start = (new Date()).getTime();

    // Pausar ejecución
    // debugger;

    // Parar cronómetro
    var time_end = (new Date()).getTime();
    var diff = time_end - time_start;

    // Detectar Developer Tools abierto
    var tolerance = 300;
    var dev_open = (diff > tolerance);

    // Mostrar mensaje de error
    if (dev_open) {
      document.body.innerHTML = 'Rastreando IP... Cierra las Developer Tools y recarga la web';
    }

    // Preparar la siguiente ejecución
    setTimeout(checkDevTools, 250);
  }
  checkDevTools();


  //]]>
</script>