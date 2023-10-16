<?php
/* - Ejercicio 1 Necesitamos crear un tipo de datos que represente a un animal. Los animales tienen un nombre, sin embargo, 
no es lo mismo el sonido del “habla” de un perro, que el de un gato. Por tanto, necesitamos crear otros tipos de datos que nos ayuden a programar estos comportamientos.
Básicamente, queremos un método makeSound() que muestre un mensaje diferente si se trata de un perro (por ejemplo, “Bup, bup!”) o un gato (por ejemplo “Mi!”). */


class animal{

    public string $animalsName;

    public function __construct($animalsName){
        $this -> animalsName = $animalsName;
    }
    
    function makeSound(){}
    
    public function getName() {
        return $this->animalsName;
    }
}

class dog extends animal{
    public function __construct($animalsName) {
        parent::__construct($animalsName);
    }

    function makeSound(){
        echo $this -> animalsName, "\n";
        echo "guau guau \n";
    }
}

class cat extends animal{
    function makeSound(){
        echo $this -> animalsName, "\n";
        echo "miau miau \n";
    }
}

$dog = new dog("Francisquito");
$cat = new cat("Minino");
$dog -> makeSound();
$cat -> makeSound();

?>