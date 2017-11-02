<?php

//constructor y destructor

//namespace Vehicles;

include '../../views/up.html';

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

use Vehicles\{Car, Truck}; //apartir de php 7

echo '<h1 style="text-align: center">Class Car</h1>';

echo 'Class Car <br>';
$car = new Car('Pablo');
$car->move();
echo 'Propietario carro: ' . $car->getOwner() . '<br>';

echo '<br>Class Truck <br>';
$truck = new Truck('Axel', 'Pickup');
$truck->move();
echo 'Propietario de la camioneta: ' . $truck->getOwner();


include '../../views/down.html';