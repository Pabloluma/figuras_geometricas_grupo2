<?php
include_once 'FiguraGeometrica.php'


class cuadrado extends FiguraGeometrica(){

    private $lado;
    private $esquina;

    public function __construct($lado, $esquina){
        $this-> $lado = $lado;
        $this-> $esquina = $esquina;
    }

    public function  area(){
        return $this ->lado * $this ->lado;
    }

    public function perimetro(){
        return $this -> lado*4;
    }


}

?>