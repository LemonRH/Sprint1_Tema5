<?php

//clase abstracta Shape + constructor ancho y alto +funcion calcular area

abstract class Shape{
    protected $height;
    protected $width;
    protected $radius;
    public function __construct($height,$width,$radius){
        $this-> height = $height;
        $this -> width = $width;   
        $this -> radius = $radius;     
    }
    abstract public function area();
}

//clases triangulo/rectangulo con sus funciones apra calcular el area
class triangle extends Shape{
    public function area(){
        return ($this->height*$this->width)/2;
        
    }
}
class rectangle extends Shape{
    public function area(){
        return $this->height*$this->width;
        
    }
}

$triangle = new triangle(5,3,NULL);
$rectangle = new rectangle(3,7,NULL);
echo "Área del triángulo: " . $triangle->area() . "\n";
echo "Área del rectángulo: " . $rectangle->area() . "\n";

//ampliacion nivel 3 (circulo)
class circle extends Shape{
    public function area(){
        return $this->radius*$this->radius*3.1416;
    }
}
$circle = new circle(NULL,NULL,5);
echo "Área del circulo: ". $circle->area(). "\n";
?>