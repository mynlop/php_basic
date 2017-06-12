<?php

class Vehicle{
    // public $propietario;
    // protected, es igual de privada pero accesible desde subclases o clases hijas
    protected $propietario;

    // constructor
    public function __construct($propietario){
        $this->propietario = $propietario;
        echo 'Constructor<br>';
    }

    public function move(){
        echo 'moving<br>';
    }

    public function getPropietario(){
        return $this->propietario;
    }

    public function setPropietario($propietario){
        $this->propietario = $propietario;
    }
}

class Car extends Vehicle{
    public function move(){
        echo 'Car: moving<br>';
    }
}

class Truck extends Vehicle{
    private $type;

    public function __construct($propietario, $type){
        $this->type = $type;
        $this->propietario = $propietario;
    }

    public function move(){
        echo 'Truck: ' . $this->type . ' moving<br>';
    }
}

echo 'Class car<br>';
$car = new Car('Santiago');
$car->move();
echo 'Propietario: ' . $car->getPropietario() .'<br>'; 

echo '<br>Class truck<br>';
$truck = new Truck('Mynor', 'Pickup');
$truck->move();
echo 'Propietario: ' . $truck->getPropietario();