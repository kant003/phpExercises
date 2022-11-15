<?php
/**
 * Crea un programa que muestre por pantalla los números impares del 1 al 199.
 * No mostrará el número 13.
 */
for($i=1;$i<=199;$i+=2){
    if($i != 13){
        echo $i.',';
    }
}
?>