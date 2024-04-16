<?php
header("Pragma: public");
header("Expires: 0");
header("Content-type: application/x-msdownload");
header('Content-Disposition: attachment; filename="inteligencia_'.$desde.'-'.$hasta.'.xls"');
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
$cont = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<table>
    <tr>
        <td colspan="8" align="center">
            <?php echo "Reporte desde $desde hasta $hasta" ?>
        </td>
    </tr>
    <tr></tr>
    <tr>
        <th colspan="8">LISTA DE ESTUDIANTES QUE REALIZARON EL TEST DE INTELIGENCIA</th>
    </tr>
    <tr>
        <th>N</th>
        <th>CI</th>
        <th>Apellidos</th>
        <th>Nombres</th>
        <th>Colegio</th>
        <th>Municipio</th>
        <th>Edad</th>
        <th>Sexo</th>
    </tr>
    <?php
if (!empty($reporte)) {
    foreach ($reporte as $fila) {
        $cont++;?>
        <tr>
            <td><?=$cont?></td>
            <td><?=$fila->ci_est?></td>
            <td><?=$fila->apellido_est?></td>
            <td><?=$fila->nombre_est?></td>
            <td><?=$fila->nombre_colegio?></td>
            <td><?=$fila->nombre_municipio?></td>
            <td><?=$fila->edad_est?></td>
            <?php
            $sexo = '';
            if ($fila->sexo_est == 'M') {
                $sexo = 'Masculino';
            } else if ($fila->sexo_est == 'F') {
                $sexo = 'Femenino';
            }
            ?>
            <td><?= $sexo ?></td>
        </tr>
        <?php
    }
}?>
    <tr></tr>
    <tr>
        <td colspan="8">EXISTEN UN TOTAL DE <?=$cont?> PERSONAS QUE REALIZARON EL TEST DE INTELIGENCIA</td>
    </tr>
    <tr>
        <td colspan="8">FECHA DE EMISION DE REPORTE <?=date('m-d-Y h:i:s a')?></td>
    </tr>
    <tr></tr>
</table>
</body>
</html>