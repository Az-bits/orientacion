<?php

if (!defined('BASEPATH'))
    exit('No tiene acceso a esta pagina');
function encrypt_id($string) {
    $key='fernando';
    $root = '';
    for($i=0; $i<strlen($string); $i++) {
          $char = substr($string, $i, 1);
          $keychar = substr($key, ($i % strlen($key))-1, 1);
          $char = chr(ord($char)+ord($keychar));
          $root.=$char;
    }
    $juan=base64_encode($root);
    $fer = str_replace(array('+','/','='),array('-','_','JCferCaM80UWqWpas46Hg'),$juan);
    return $fer;
}
function decrypt_id($string) {
    $key='fernando';
    $string = str_replace(array('-','_','JCferCaM80UWqWpas46Hg'),array('+','/','='),$string);
    $fernando = '';
    $string = base64_decode($string);
    for($i=0; $i<strlen($string); $i++) {
          $char = substr($string, $i, 1);
          $keychar = substr($key, ($i % strlen($key))-1, 1);
          $char = chr(ord($char)-ord($keychar));
          $fernando.=$char;
    }
    return $fernando;
}

function fecha_literal($Fecha, $Formato = 2) {
    $dias = array(0 => 'Domingo', 1 => 'Lunes', 2 => 'Martes', 3 => 'Mièrcoles', 4 => 'Jueves', 5 => 'Viernes', 6 => 'Sàbado');
    $meses = array(1 => 'enero', 2 => 'febrero', 3 => 'marzo', 4 => 'abril', 5 => 'mayo', 6 => 'junio',
        7 => 'julio', 8 => 'agosto', 9 => 'septiembre', 10 => 'octubre', 11 => 'noviembre', 12 => 'diciembre');
    $aux = date_parse($Fecha);
    switch ($Formato) {
        case 1:  // 04/10/10
            return date('d/m/y', strtotime($Fecha));
        case 2:  //04/oct/10
            return sprintf('%02d/%s/%02d', $aux['day'], substr($meses[$aux['month']], 0, 3), $aux['year'] % 100);
        case 3:   //octubre 4, 2010
            return $meses[$aux['month']] . ' ' . sprintf('%.2d', $aux['day']) . ', ' . $aux['year'];
        case 4:   // 4 de octubre de 2010
            return $aux['day'] . ' de ' . $meses[$aux['month']] . ' de ' . $aux['year'];
        case 5:   //lunes 4 de octubre de 2010
            $numeroDia= date('w', strtotime($Fecha));
            return $dias[$numeroDia].' '.$aux['day'] . ' de ' . $meses[$aux['month']] . ' de ' . $aux['year'];
        case 6:
            return date('d/m/Y', strtotime($Fecha));
        case 7:
            if(date('G', strtotime($Fecha))>0){
                return date('G', strtotime($Fecha))." horas y ".date('i', strtotime($Fecha))." minutos";
            }else{
                return date('i', strtotime($Fecha))." minutos";

            }
            
        default:
            return date('d/m/Y', strtotime($Fecha));
    }
}



?>