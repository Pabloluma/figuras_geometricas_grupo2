<?php
include_once 'FiguraGeometrica.php';
include_once 'punto.php';
class Triangulo extends FiguraGeometrica{
    private float $base;
    private float $altura;
    private float $lado1;
    private float $lado2;
    private float $lado3; 
    private punto $vertice;


   public function __construct($nombre, punto $vertice ,float $base, float $altura, float $lado1, float $lado2, $lado3) {
    parent::__construct($nombre);
    $this->vertice = $vertice;
    $this->base = $base;
    $this->altura = $altura;
    $this->lado1 = $lado1;
    $this->lado2 = $lado2;
    $this->lado3 = $lado3;
    }

    public function getBase(){
        return $this->base;
    }
    public function getAltura(){
        return $this->altura;
    }

    public function getLado1(){
        return $this->lado1;
    }
    public function getLado2(){
        return $this->lado2;
    }

    public function getLado3(){
        return $this->lado3;
    }
    public function getVertice(){
        return $this->vertice;
    }



    public function area(){
        return $this->base*($this->altura/2);
    }
    public function perimetro(){
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

    // // Los parametros son:
    // // -->Image => Es la imagen que se ha creado arriba de 500 x 300
    // // -->triangle_points => Es la ubicacion de cada punto 
    // // --> 3 => El número de puntos que tiene la figura como es un triangulo pues 3
    // // --> triangle_color => Color que va a tener el triangulo
    public function dibujar($image,$verticeA,$verticeB,$verticeC, $color){
        $puntos_triangulo = [
            $verticeA->getX(), $verticeA->getY(),  // Vértice A
            $verticeB->getX(), $verticeB->getY(),  // Vértice B
            $verticeC->getX(), $verticeC->getY()   // Vértice C
        ];
        return imagefilledpolygon($image, $puntos_triangulo, 3, $color); // Color rojo
    }
}