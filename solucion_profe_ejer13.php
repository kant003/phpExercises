<?php
/**
*Crea una función que dado el dia de la semana
*en número(1-7), nos devuelva el dia de la semana en texto(Lunes,martes, ...)

  */
function getNameOfWeek($dayNumber){
  /*if($dayNumber==1) return 'Lunes';
  if($dayNumber==2) return 'Martes';
  if($dayNumber==3) return 'Miercoles';
  if($dayNumber==4) return 'Jueves';
  if($dayNumber==5) return 'Viernes';
  if($dayNumber==6) return 'Sabado';
  if($dayNumber==7) return 'Domingo';*/
  $days=array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
  //TODO usar excepciones
  if($dayNumber == null) return 'No has pasado el día de la semana';
  if($dayNumber <1 || $dayNumber>count($days)) return 'Error en el día de la semana';

  return $days[$dayNumber-1];
}

echo getNameOfWeek(3);