<?php
/**
 * Crea una página web que posea formulario
 * El formulario tendrá los campos (input): 
 * - Nombre
 * - precio 
 * - y descuento
 * Cuando el usuario envie el formulario (por POST),
 * recuperar esos valores y mostrar por pantalla el coste del producto aplicandole el descuento
 */
$msg='';
if($_POST){
    $name = $_POST["name"];
    $price = $_POST["price"];
    $dto = $_POST["dto"];

    $finalPrice = $price - $price * $dto;
    //$finalPrice = $price * (1-$dto);
    $msg="El precio final del producto ".$name." es:".$finalPrice;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display:flex;
            flex-direction:column;
            align-items: center;
        }
        label{
            display:flex;
            justify-content:space-between;
        }
    </style>
</head>
<body>
    <h2>Calculo del descuento</h2>



    <form action="solucion_profe_ejer11.php" method="POST">
        <label for="name">
            Nombre del artículo:
            <input type="text" name="name" id="name">
        </label>
        <label for="price"> 
            Precio del artículo:
            <input type="number" name="price" id="price">
        </label>
        <label for="dto">
            Descuento del artículo:
            <input type="float" name="dto" id="dto">
        </label>
        <input type="submit" value="Calcular">
    </fom>

    <?php
        echo $msg;
    ?>
</body>
</html>