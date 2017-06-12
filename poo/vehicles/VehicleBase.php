<?php

namespace Vehicles;

abstract class VehicleBase{
    // public $propietario;
    // protected, es igual de privada pero accesible desde subclases o clases hijas
    protected $propietario;

    // constructor
    public function __construct($propietario){
        $this->propietario = $propietario;
        echo 'Constructor<br>';
    }

    public function move(){
        echo $this-> startEngine() .'<br>';
        echo 'moving<br>';
    }

    public function getPropietario(){
        return $this->propietario;
    }

    public function setPropietario($propietario){
        $this->propietario = $propietario;
    }

    public abstract function startEngine();
}