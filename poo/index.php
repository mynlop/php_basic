<?php

class Car{
    // public $propietario;
    private $propietario;

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

echo 'Class car<br>';

$car = new Car();
$car2 = new Car();
$car->move();

$car->setPropietario('Santiago');
$car2->setPropietario('Mynor');
// $car->propietario = 'Alex';
// echo 'Owner: ' . $car->propietario;
echo 'Propietario: ' . $car->getPropietario() .'<br>'; 
echo 'Propietario: ' . $car2->getPropietario();