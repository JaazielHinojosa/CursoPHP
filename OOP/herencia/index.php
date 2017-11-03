<?php

//constructor y destructor

//namespace Vehicles;

include '../../views/up.html';

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

use Vehicles\{Car, Truck}; //apartir de php 7

//interfaces
//interface MyInterface {
//    public function method1();
//}

echo '<h1 style="text-align: center">Class Car</h1>';

echo 'Class Car <br>';
$car = new Car('Pablo');
$car->move();
//echo 'Propietario carro: ' . $car->getOwner() . '<br>';

echo '<br>Class Truck <br>';
$truck1 = new Truck('Axel', 'Pickup');
$truck1->move();
//echo 'Propietario de la camioneta: ' . $truck->getOwner();

echo '<br>Class Truck <br>';
$truck2 = new Truck('Max', 'Pickup');
$truck2->move();
echo '<br> Total Trucks: ' .Truck::getTotal() . '<br>';

$ser = serialize($car);

$newCar = unserialize($ser);

echo 'New Car Owner: ' . $newCar->getOwner(). '<br>';

include '../../views/down.html';