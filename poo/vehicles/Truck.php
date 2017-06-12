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

    public function move(){
        echo 'Truck: ' . $this->type . ' moving<br>';
    }

    public static function getTotal(){
        return self::$count;
    }
}