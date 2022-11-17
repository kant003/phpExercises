<?php
/**
*Crea una función llamada validateDNI() 
*a la cual le puedas padar un dni en formato texto
*La función devolverá true o false si el DNI está correctamente formado
* - Supondremos que el DNI está bien cuando tenga una longitud de 9 caracteres
* - El último caracter sea una letra del alfabeto
*/

/**
 * Pista: La función ctype_alpha (https://www.php.net/manual/es/function.ctype-alpha.php)
 * nos dice si un caracter es un caracter alfabético.
 */

function validateDNI($dni){
    
}

echo validateDNI('36234543N')?'Es valido':'No es valido';
