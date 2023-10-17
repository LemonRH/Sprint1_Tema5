<?php
/* - Ejercicio 1 Necesitamos crear un tipo de datos que represente a un animal. Los animales tienen un nombre, sin embargo, 
no es lo mismo el sonido del “habla” de un perro, que el de un gato. Por tanto, necesitamos crear otros tipos de datos que nos ayuden a programar estos comportamientos.
Básicamente, queremos un método makeSound() que muestre un mensaje diferente si se trata de un perro (por ejemplo, “Bup, bup!”) o un gato (por ejemplo “Mi!”). */

// interfaz para representar un animal y clases implementados a ella con los respectivos animales
interface Animal {
    public function makeSound();
}

class Cat implements Animal{
    public function makeSound(){
        echo "Gato: miau miau\n";
    }
}

class Dog implements Animal{
    public function makeSound(){
        echo "Perro: guau guau\n";
        
    }
}
// creamos un array de animales
$cat =new Cat();
$dog = new Dog();
$animals = array($cat,$dog);
foreach($animals as $animal) {
    $animal->makeSound();
  }


?>