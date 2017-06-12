<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends VehicleBase{
    private $type;

    public function __construct($propietario, $type){
        $this->type = $type;
        $this->propietario = $propietario;
    }

    public function move(){
        echo 'Truck: ' . $this->type . ' moving<br>';
    }
}