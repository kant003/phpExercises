<?php
/**
 * Guarda en un array los números 4,6,2,1,-6,3
 * Recorre el array, y muestra por pantalla cual es el mayor de todos esos números.
 */
function maximum($numbers){
    if(count($numbers) <= 0) return 0;

    $max=$numbers[0];
    foreach($numbers as $indice=>&$valor){
        if($valor > $max){
            $max = $valor;
        }
    }
    
    return $max;
}

$numbers=array(4,6,2,1,-6,3);
$max = maximum($numbers);
echo 'El mayor de todos es:'.$max;

?>