<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

// php 7
// Vechiles\{Car, Truck}

use Vehicles\Car;
use Vehicles\Truck;

echo 'Class car<br>';
$car = new Car('Santiago');
$car->move();
echo 'Propietario: ' . $car->getPropietario() .'<br>'; 

echo '<br>Class truck<br>';
$truck = new Truck('Mynor', 'Pickup');
$truck->move();
echo 'Propietario: ' . $truck->getPropietario();