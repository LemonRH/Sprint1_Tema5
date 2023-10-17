<?php

//clase abstracta Shape + constructor ancho y alto +funcion calcular area

abstract class Shape{
    protected $height;
    protected $width;
    public function __construct($height,$width){
        $this-> height = $height;
        $this -> width = $width;        
    }
    abstract public function area();
}

//clases triangulo/rectangulo con sus funciones apra calcular el area
class triangle extends Shape{
    public function area(){
        echo "Area triangulo: ";
        return ($this->height*$this->width)/2;
        
    }
}
class rectangle extends Shape{
    public function area(){
        echo "Area rectangulo: ";
        return $this->height*$this->width;
        
    }
}

$triangle = new triangle(5,3);
$rectangle = new rectangle(3,7);
echo "Área del triángulo: " . $triangle->area() . "\n";
echo "Área del rectángulo: " . $rectangle->area() . "\n";
?>