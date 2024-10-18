<?php
include_once 'FiguraGeometrica.php'


class Cuadrado extends FiguraGeometrica(){

    private float $lado;
    private Punto $esquina;

    public function __construct($lado, Punto $esquina){
        $this-> $lado = $lado;
        $this-> $esquina = $esquina;
    }

    public function getLado(){
        return $this -> lado;
    }

    public function  area(){
        return $this ->lado * $this ->lado;
    }

    public function perimetro(){
        return $this -> lado*4;
    }


}

?>