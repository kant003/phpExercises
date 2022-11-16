<?php
/**
 * Crea una función a la que se le pase 
 * una lista de numeros (array) y un numero
 * y nos diga si ese número esta dentro del array
 * 
  */
function isOnTheList($list, $value){
    //return in_array($list, $value)
    for($i=0;$i<count($list);$i++){
      if($list[$i] == $value){
        return true;
      }
    }
    return false;
}

$myList = array(1,4,6,9);
$res = isOnTheList($myList, 14);
if($res) echo 'Esta en la lista';
else echo 'No esta en lista';
?>