<?php

/**
 * Guarda en un array 5 valores numéricos
 * Muestra por pantalla el primer y último valor almacenado en el array
 * 
 *  https://www.php.net/manual/en/function.array.php
 *  https://www.php.net/manual/en/ref.array.php
 */
// Crear funciones puras
// - No cambia nada del exterior
// - Dada una entrada siempre da el mismo resultado
// - Su nombre no miente
// - Solo hace una cosa
function getFirstElement($arr){
    return $arr[0];
}
function getLastElement($arr){
    return $arr[count($arr)-1];
}

$numbers=array(6,3,-2,7,1);
echo getFirstElement($numbers);
echo '<br/>';
echo getLastElement($numbers);

?>