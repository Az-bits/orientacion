<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Hugo Vladimir Ajno HUchani">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test de Interes Profesional</title>
    <link href="<?php echo base_url(); ?>assets_/libs/img/UPEA.png" rel="icon">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/test/css/style.css">
</head>

<body> 

    <form class="form-register" action="<?php echo base_url(Hasher::make(10)) ?>" method="POST">
        <!-- <form class="form-register" id="guardar_seguimineto_eva" method="POST"> -->
        <div style="text-align: center">
            <h3>TEST DE INTERESES PROFESIONALES</h3>
        </div>
        <h5><br>Se presentan características en cada afirmación y usted evalúa su interés en un nivel de bajo a mas alto</h5>
        <table border="1" id="" class="" style="border-color:cyan;border-spacing:0px; width:100%"><br>
            <thead>
                <tr style="color:cyan">
                    <th>#</th>
                    <th>Afirmación</th>
                    <th>Respuesta</th>
                </tr>
            </thead> 
            <tbody>
                <?php $con = 1;
                foreach ($listar as $value) { ?>
                    <tr>

                        <input type="hidden" name="idest" value="<?php echo $idest; ?>">
                        <input type="hidden" name="idpreg[]" value="<?php echo $value->idpreguntas3; ?>">
                        <td><?php echo $con;$con++; ?></td>
                        <td><?php echo $value->nom_pregunta3; ?></td>
                        <td>
                               <select style="color: yellow;" name="respuesta<?php echo $value->idpreguntas3; ?>" class="controls">
                                <option value="0" selected>Opciones</option>
                                <option value="1">Me desagrada Mucho</option>
                                <option value="2" >No me gusta </option>
                                <option value="3">Me es indiferente</option>
                                <option value="4" >Me gusta</option>
                                <option value="5">Me gusta Mucho</option>
                            </select>
                        </td>
                    </tr>
                <?php   } ?>
            </tbody>
        </table>
        <!--FIN TABLA-->
        <input class="botons" type="submit" value="VER RESULTADO">
    </form>
    <form class="form-register" method="POST" action="<?php echo base_url(Hasher::make(270)) ?>">
        <input style="background-color: green; margin: 0px" class="botons" type="submit" value="VOLVER A INICIO">
    </form>
</body>

</html>

<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script>
    $("#guardar_seguimineto_eva").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: '<?php echo base_url(Hasher::make(43)) ?>',
            type: 'POST',
            data: $("form").serialize(),
            success: function(dat) {
                setTimeout(function() {
                    window.location = '<?php echo base_url(Hasher::make(58)) ?>';
                }, 1000);
            }
        });
    });
</script>
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