<?php
include_once 'FiguraGeometrica.php'


class cuadrado extends FiguraGeometrica(){

    public function  area(){
        return $this ->lado * $this ->lado;
    }

    public function perimetro(){
        return $this -> lado*4;
    }


}

?>