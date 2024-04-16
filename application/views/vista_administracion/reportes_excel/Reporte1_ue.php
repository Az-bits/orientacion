<?php
header("Pragma: public");
header("Expires: 0");
header("Content-type: application/x-msdownload");
header('Content-Disposition: attachment; filename="Reporte_ue.xls"');
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
        <th>N</th>
        <th>Unidad Educativa</th>
        <th>Cantidad de Estudiantes</th>
    </tr>
    <?php
    if (!empty($reporte)) {
        foreach ($reporte as $fila) {?>
        <tr>
            <td><?php echo $cont ?></td>
            <td><?php echo $fila->nombre_colegio ?></td>
            <td><?php echo $fila->TOTAL ?></td>
        </tr>
        <?php
        $cont++;
        }
    }?>
    <tr></tr>
    <tr>
        <td colspan="3"> EXISTEN UN TOTAL DE <?= $cont ?> UNIDADES EDUCATIVAS</td>
    </tr>
</table>
</body>
</html>