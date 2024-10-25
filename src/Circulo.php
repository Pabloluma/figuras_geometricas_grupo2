<?php

include_once 'FiguraGeometrica.php';

class Circulo extends FiguraGeometrica{
    private $nombre;
    private $radio;

    public function __construct($nombre, $radio){
        $this->nombre=$nombre;
        $this->radio=$radio;
        
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getRadio(){
        return $this->radio;
    }

    public function area(){
        return M_PI * pow($this->radio, 2);
    }
    public function perimetro() {
        return 2 * M_PI * $this->radio;
    }

}
?>