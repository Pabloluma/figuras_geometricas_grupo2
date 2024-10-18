<?php
class punto{
    private float x;
    private float y;

    //Constructor
    public function __construct($x, $y){
        $this -> $x=$x;
        $this -> $y=$y;
    }

    //Getter
    public function getX(){
        return $this -> x;
    }

    public function getY(){
        return $this -> y;
    }

    //Funcion que calcula la distacia que existe entre el punto de origen (0,0) y nuestro punto (x,y)
    public function distancia(){
        return sqrt(pow($this->x, 2) + pow($this->y, 2));
    }
}
?>