<?php
/**
 * Crea una clase que permita almacenar los datos de un animal
 * En concreto tendremos que guardar:
 * - Nombre (texto)
 * - Edad (numérico)
 * - Si es salvaje (booleano)
 * - peso(numérocp)
 * La clase tendrá un método que determine si el animal es peligroso
 * - Será peligroso cuando su peso supere los 10 kilos y sea salvaje
 * Añade un constructor a la clase
 * 
 * Por último, crea un objeto de tipo Animal
 * - Muestra por pantalla sus datos
 */
class Animal{
    public $name;
    public $age;
    public $isWild;
    public $weigth;
    
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
        $this->isWild = false;
        $this->weigth = 10;
    }
    public function isDangerous(){
        return $this->weigth>10 && $this->isWild==true;
    }
}
$oso = new Animal('Yogui', 26);
$oso->weigth = 180;

if($oso->isDangerous()) { echo "El oso es peligroso"; }
else{echo "El oso no es peligroso";}
echo "<br/>";
echo "El oso "
    .($oso->isDangerous()?"es peligroso":"no es peligroso");
?>