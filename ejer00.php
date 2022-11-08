<?php
    // Ejercicio:
    // Tengo en un array almacenadas mis 3 notas
    // Muestra la nota media final el curso
    $notas=array(10,4,6);

    $suma = 0;
    
    foreach($notas as $indice=>&$valor){
        $suma = $suma + $valor;
    }

    $media = $suma / count($notas);

    echo "La nota media final es:".$media;
    
?>