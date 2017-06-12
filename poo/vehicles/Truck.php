<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends VehicleBase{
    // public static $count = 0;
    private static $count = 0;
    private $type;

    public function __construct($propietario, $type){
        $this->type = $type;
        $this->propietario = $propietario;
        self::$count++;
    }

    public static function getTotal(){
        return self::$count;
    }

        public function startEngine(){
        return 'Truck: start engine';
    }
}