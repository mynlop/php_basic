<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class Car extends VehicleBase implements \Serializable{
    public function move(){
        echo $this-> startEngine() .'<br>';
        echo 'Car: moving<br>';
    }
    public function startEngine(){
        return 'Car: start engine';
    }

    public function serialize(){
        echo 'Serialize <br>';
        return $this->propietario;
    }

    public function unserialize($serial){
        echo 'Unserialize <br>';
        $this->propietario = $serial;
    }
}