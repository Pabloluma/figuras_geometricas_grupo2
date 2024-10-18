<?
include_once 'FiguraGeometrica.php';

class Circulo extends FiguraGeometrica{
    private $centro;
    private $radio;

    public function __construct($centro, $radio){
        $this->centro=$centro;
        $this->radio=$radio;

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