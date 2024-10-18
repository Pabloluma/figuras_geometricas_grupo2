<?php
abstract class FiguaraGeometrica{
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this -> nombre;
    }

    abstract public function area();

    abstract public function perimetro();
}