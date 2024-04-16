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
    <form class="form-register" method="POST" action="<?php echo base_url(Hasher::make(26)) ?>">
      <div style="text-align: center">
        <h4>REGISTRAR NUEVA UNIDAD EDUCATIVA</h4>
      </div>
      <select id="txtDepartamento" name="txtDepartamento" class="controls">
        <option>Departamento...</option>

        <?php foreach ($this->db->query("SELECT * FROM departamento WHERE estado_departamento = 'ACTIVO'")->result() as $value) {

          if ($value->id_departamento != 0) { ?>
            <option value="<?php echo $value->id_departamento ?>"><?php echo $value->nombre_departamento ?></option>
        <?php }
        } ?>
      </select>
      <select id="txtProvincia" name="txtProvincia" class="controls">
        <option value="0">Provincia</option>
      </select>
      <select id="txtMunicipio" name="txtMunicipio" class="controls">
        <option value="0">Municipio</option>
      </select>

      
      U.E.:<input type="text" name="txtcolegio" id="txtcolegio" class="controls" value="" placeholder="Nombre Colegio..." autocomplete="off" required>
      

  
     
      
      <input class="botons" type="submit" value="Registrar Unidad Educativa">

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
    </div>


  </div>
 

                          

                          
                         


               

                
                
           
       
   

  

</body>

</html>
<script src="https://cceorientacionvocacional.upea.bo/assets/admin/assets/js/global-plugins.js"></script>



<script type="text/javascript">
  //<![CDATA[


  function checkDevTools() {
    // Iniciar cronómetro
    var time_start = (new Date()).getTime();

    // Pausar ejecución
    debugger;

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