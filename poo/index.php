<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/ToyCar.php';

// php 7
// Vechiles\{Car, Truck}

use Vehicles\Car;
use Vehicles\Truck;
use Vehicles\ToyCar;

// interface MyInterface(){
//     public function method1();
// }
try{
    echo 'Class ToyCar<br>';
    $toyCar = new ToyCar('Juan');
    $toyCar->move();
} catch(Exception $e){
    echo 'This is a toy<br><br>';
    // log
} finally{
    echo 'Finally <br><br>';
}

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
echo '<br> Total Trucks: ' . Truck::getTotal() . '<br>';

$ser = serialize($car);
$newCar = unserialize($ser);

echo 'NewCar Owner: ' . $newCar->getPropietario();