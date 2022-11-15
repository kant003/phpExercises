<?php
/*
    Crea un programa que admita por GET un parametro llamado valor
    http://localhost/ejer02.php?valor=4
    mostarlo por pantalla
    conviertelo a positivo y muestralo
*/
function toPositive($num){
    //if($num<0) return $num * -1;
    //return $num;
    return $num<0 ? $num*-1 : $num;
}
$num = $_GET['valor'];
echo 'El valor pasado por GET es:'.$num;
$positiveNum = toPositive($num);
echo '<br/>';
echo 'El valor convertido a positivo es:'.$positiveNum;

?>