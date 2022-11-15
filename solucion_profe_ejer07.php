<?php
/**
 * Muestra por pantalla si hoy es fin de semana o no.
 * Tendrás que ver el día de la semana que es hoy
 * 
 *  https://www.php.net/manual/es/datetime.formats.date.php
 */
$now=date("l");
if($now=='Saturday' || $now=='Sunday'){
    echo 'Es fin de semana';
}else{
    echo 'No es fin de semana';
}
?>