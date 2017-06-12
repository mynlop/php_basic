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

echo '<br>Class truck 1<br>';
$truck1 = new Truck('Mynor', 'Pickup');
$truck1->move();

echo 'Class truck 2<br>';
$truck2 = new Truck('Mynor', 'Pickup');
$truck2->move();

// echo '<br> Total Trucks: ' . Truck::$count;
echo '<br> Total Trucks: ' . Truck::getTotal();